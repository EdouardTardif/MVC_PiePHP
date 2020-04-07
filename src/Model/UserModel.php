<?php

class UserModel {

    private $email;
    private $password;
    public $db;

    public function __construct($email,$password){
        $this->db = Database::getDatabase();
        $this->email = $email;
        $this->password = $password;
    }


    public function create(){
        $orm = new ORM();
        $orm->find();
    }
}