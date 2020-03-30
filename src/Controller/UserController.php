<?php

class UserController extends Controller {


    public function indexAction(){
        echo "index";
    }
    public function filterAction(){
        echo "filter";
    }
    public function addAction(){
        echo "added";
        // echo $this->yes;
    }
}