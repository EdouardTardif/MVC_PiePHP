<?php

namespace Core;
class Entity {
    public function __construct($arr){

        foreach($arr as $key => $value){
            $this->key = $value;
        }

    }
}