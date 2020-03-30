<?php

class UserController extends Controller {

    public function indexAction(){
        $db = Database::getDatabase();
        
    }
    public function filterAction(){
        echo "filter";
    }
    public function addAction(){
        echo "added";
        // echo $this->yes;
    }
}