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

    public function save(){
        $requete = $this->db->prepare('INSERT INTO users (email,password) VALUES (?,?)');
        $requete->execute([$this->email,$this->password]);

    }
}