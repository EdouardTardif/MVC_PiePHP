<?php

namespace Core;
use Exception;
class Entity {

    public $relations = null;

    public function __construct($arr){
        $this->orm = new \Core\ORM();
        
        

        if(isset($arr['id']) && count($arr) == 1) {
            $this->id = $arr['id'];
            $table = strtolower(strrev(substr(strrev(substr(get_class($this),6)),5)) .'s');
            // echo 'le test est ici ------------->'.$table.PHP_EOL;
            $res = $this->orm->read($table,$this->id);
            // var_dump($res);
            foreach($res as $key => $value){
                $this->$key = $value;
            }
            $this->data = $res;
        }
        else{
            foreach($arr as $key => $value){
                $this->$key = $value;
            }
    
            $this->data = $arr;
        } 
        
        if($this->relations !== null && isset($this->id)){
            foreach($this->relations as $key => $relation){
                if($key == "has_many"){
                    $table = $relation["table"];
                    $connect = $relation["key"];
                    $res = $this->orm->find($table."s",['WHERE'=>"$connect = $this->id"]);
                    foreach($res as $re){
                        $class = "\Model\\".$table."Model";
                        $this->$table[] = new $class($re);
                    }
                    

                } else if ($key == "has_one"){
                    $table = $relation["table"] ;
                    $connect = $relation["key"];
                    $tables = $table."s";
                    $res = $this->orm->read($tables,$this->$connect);
                    $class = "\Model\\".$table."Model";
                    $this->$table = new $class($res);


                } else if ($key == "many_to_many"){
                    $table = $relation["table1"]."s_".$relation["table2"]."s";
                    $column1 = $relation["table1"]."_id";
                    $column2 = $relation["table2"]."_id";
                    $variablename = $relation["table2"];
                    // echo 'la table est -------------->'.$table.PHP_EOL;
                    $result = $this->orm->db->query("SELECT 1 FROM $table LIMIT 1");
                    if(!$result){
                        // echo "creation de la table $table".PHP_EOL;
                        $this->orm->db->query("CREATE TABLE $table (id int NOT NULL AUTO_INCREMENT, $column1 int, $column2 int, PRIMARY KEY (id))");
                        $result = $this->orm->db->query("SELECT 1 FROM $table LIMIT 1");
                        // var_dump($result);
                        // echo $oui = $result ? 'table cree'.PHP_EOL : 'echec de la creation'.PHP_EOL;
                    }
                    $res = $this->orm->find($table,['WHERE'=>"$column1 = $this->id"]);
                    // var_dump($res);
                    foreach($res as $re){
                        $currentid = $re['id'];
                        $resch = $this->orm->read($relation["table2"]."s",$currentid);
                        $class = "\Model\\".$relation["table2"]."Model";
                        // echo $class.PHP_EOL;
                        $this->$variablename[] = new $class($resch);
                    }

                    
                }
            }
        }
    }

    
}