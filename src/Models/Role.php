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

    function create(){
        $sql = "INSERT INTO roles (role_name, permission) VALUES (:role_name, :permission)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":role_name", $this->getRole_name());
        $stmt->bindValue(":permission", $this->getPermission());
        $stmt->execute();
    }

    function update(){
        $sql = "UPDATE roles SET role_name = COALESCE(:role_name, role_name), permission = COALESCE(:permission, permission) WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->bindValue(":role_name", $this->getRole_name());
        $stmt->bindValue(":permission", $this->getPermission());
        $stmt->execute();
    }

    function delete(){
        $sql = "DELETE FROM roles WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(":id", $this->getId());
        $stmt->execute();
    }

    function read(){
        $sql = "SELECT * FROM roles";
        $stmt = $this->conn->prepare($sql);
        $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, self::class);
        $stmt->execute();
        $user = $stmt->fetchAll();
        return $user;
    }
}