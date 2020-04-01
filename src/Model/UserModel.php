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
        $requete = $this->db->prepare('INSERT INTO users (email,password) VALUES (?,?)');
        $requete->execute([$this->email,$this->password]);
    }

    public function read(){

    }

    public function update(){

    }

    public function read_all(){

    }
    
    public function save(){
        $requete = $this->db->prepare('INSERT INTO users (email,password) VALUES (?,?)');
        $requete->execute([$this->email,$this->password]);

    }

    public function login(){
        $requete = $this->db->prepare('SELECT * FROM users WHERE email = ? AND password = ?');
        $requete->execute([$this->email,$this->password]);
        if($count = $requete->rowCount() > 0){
            return $resultat = $requete->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
}