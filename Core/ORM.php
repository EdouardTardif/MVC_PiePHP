<?php

namespace Core;
use PDO;
class ORM {
    public $db;

    public function __construct(){
        $this->db = \Core\Database::getDatabase();
    }

    public function create($table = 'users',$data = []){
        $columns = [];
        $values = [];
        $valeurs = [];
        foreach($data as $key => $value){
            $columns[] = $key;
            $values[] = '?';
            $valeurs[] = $value;
        }
        $columns = '('.implode(",",$columns) . ')';
        $values = '('.implode(",",$values) . ')';

        $sql = "INSERT INTO $table $columns VALUES $values";
        $requete = $this->db->prepare($sql);
        $requete->execute($valeurs);
        $res = $this->db->lastInsertId();
        return $res;
    }

    public function update($table = 'users',$id = 0,$data = []){
        $columns = [];
        $values = [];
        $valeurs = [];
        foreach($data as $key => $value){
            $columns[] = $key . ' = ?';
            $valeurs[] = $value;
        }
        $columns = implode(",",$columns);
        $sql = "UPDATE $table SET $columns WHERE id = $id";
        $requete = $this->db->prepare($sql);
        $bool = $requete->execute($valeurs);
        return $bool;
    }

    public function read($table,$id){
        $sql = "SELECT * FROM $table WHERE id = ?";
        $requete = $this->db->prepare($sql);
        $requete->execute([$id]);
        $res = $requete->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function delete($table,$id){
        $sql = "DELETE FROM $table WHERE id = ?";
        $requete = $this->db->prepare($sql);
        $bool = $requete->execute([$id]);
        return $bool;
    }

    public function check($table = 'users',$data = ['email'=>'oui@oui.com']){
        $columns = '';
        $valeurs = '';
        foreach($data as $key => $value){
            $columns = $key;
            $valeurs = $value;
        }
        $sql = "SELECT * FROM $table WHERE $columns = ?";
        $requete = $this->db->prepare($sql);
        $requete->execute([$valeurs]);
        $count = $requete->rowCount();
        return $count;
    }

    public function find($table = 'users',$params = ['WHERE' => '1','ORDER BY' => 'id ASC','LIMIT' => '']){
        $sql = "SELECT * FROM $table";
        $valeurs = [];
        foreach($params as $key => $param){
            $sql .= " $key $param";
            $valeurs[] = $param;
        }
        echo 'find sql ------>'.$sql.PHP_EOL;
        $requete = $this->db->query($sql);
        // $requete->execute($valeurs);
        $res = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
}