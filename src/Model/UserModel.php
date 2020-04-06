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

    public function read($id){
        
        $sql = "SELECT * FROM users WHERE id = ?";
        // echo $sql.PHP_EOL;
        // print_r($valeurs);
        $requete = $this->db->prepare($sql);
        $requete->execute([$id]);
        $res = $requete->fetch();
        return $res;
    }

    public function update($table = 'users',$data = []){
        $columns = [];
        $values = [];
        $valeurs = [];
        foreach($data as $key => $value){
            $columns[] = $key . "= ?";
            $valeurs[] = $value;
        }
        $columns = '('.implode(",",$columns) . ')';
        // echo $columns.'---------'.$values;

 
        $sql = "UPDATE $table SET $columns WHERE id = ?";
        echo $sql.PHP_EOL;

        // print_r($valeurs);
        // $requete = $this->db->prepare($sql);
        // $requete->execute($valeurs);
        // $res = $this->db->lastInsertId();
        // var_dump($res);
    }

    public function read_all($table){
        $sql = "SELECT * FROM $table";
        $requete = $this->db->prepare($sql);
        $requete->execute();
        if($count = $requete->rowCount() > 0){
            return $resultat = $requete->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
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