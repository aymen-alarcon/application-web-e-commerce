<?php

namespace App\Models;
use PDO;

class Role{
    private ?PDO $conn;
    private ?int $id;
    private ?string $role_name;
    private ?string $permission;

    public function __construct(?PDO $conn = NULL, ?int $id = NULL, ?string $role_name = NULL, ?string $permission = NULL)
    {
        $this->conn = $conn;
        $this->id = $id;
        $this->role_name = $role_name;
        $this->permission = $permission;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPermission()
    {
        return $this->permission;
    }

    public function setPermission($permission)
    {
        $this->permission = $permission;
    }

    public function getRole_name()
    {
        return $this->role_name;
    }

    public function setRole_name($role_name)
    {
        $this->role_name = $role_name;
    }

    function read(){
        $sql = "SELECT * FROM roles";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $user = $stmt->fetch();
        return $user;
    }
}