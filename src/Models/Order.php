<?php
namespace App\Models;
class Order{
    private ?int $id;
    private ?string $title;
    private ?string $description;
    private ?string $created_at;
    private int $user_id;

    function __construct(?int $id=null,?string $title=null,?string $description=null,?string $created_at=null,int $user_id=0){
        $this->id=$id;
        $this->title=$title;
        $this->description=$description;
        $this->created_at=$created_at;
        $this->user_id=$user_id;
    }

    function getId(){
        return $this->id;
    }

    function getTitle(){
        return $this->title;
    }

    function getDescription(){
        return $this->description;
    }

    function getCreated_at(){
        return $this->created_at;
    }

    function getUser_id(){
        return $this->user_id;
    }

    function setId($id){
        $this->id=$id;
    }

    function setTitle($title){
        $this->title=$title;
    }

    function setDescription($description){
        $this->description=$description;
    }

    function setCreated_at($created_at){
        $this->created_at=$created_at;
    }

    function setUser_id($user_id){
        $this->user_id=$user_id;
    }
}