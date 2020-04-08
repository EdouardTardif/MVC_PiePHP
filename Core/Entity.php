<?php

namespace Core;
class Entity {

    public $relations = null;

    public function __construct($arr){
        $this->orm = new \Core\ORM();
        
        

        
        if($count = count($arr) > 1){
            foreach($arr as $key => $value){
                $this->$key = $value;
            }
    
            $this->data = $arr;
        } else if(isset($arr['id'])) {
            $this->id = $arr['id'];
            $res = $this->orm->read('users',$this->id);
            foreach($res as $key => $value){
                $this->$key = $value;
            }
            $this->data = $res;
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
                    $res = $this->orm->read($tables,$connect);
                    $class = "\Model\\".$table."Model";
                    $this->$table = new $class($res);


                } else if ($key == "many_to_many"){

                }
            }
        }
    }

    
}