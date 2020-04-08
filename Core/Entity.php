<?php

namespace Core;
class Entity {




    public function __construct($arr){
        // var_dump($arr);
        $this->orm = new \Core\ORM();
        foreach($arr as $key => $value){
            $this->$key = $value;
        }

        $this->data = $arr;
    }

    
}