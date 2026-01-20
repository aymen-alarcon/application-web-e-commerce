<?php

namespace App\Models;

class Role{
    private ?int $id;
    private ?string $role_name;
    private ?string $permission;

    public function __construct(int $id, string $role_name, string $permission)
    {
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
}