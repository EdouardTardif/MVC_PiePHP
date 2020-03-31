<?php

// use Core\Database;

class UserController extends Controller {

    public function indexAction(){
        // $db = Database::getDatabase();

    }
    public function filterAction(){
        echo "filter";
    }
    public function addAction(){
        //var_dump($this->db);
        //echo 'oui';
        $this->render('register');
        if(isset($_POST['email']) && isset($_POST['password'])){
            $user = new UserModel($_POST['email'],$_POST['password']);
            $user->save();
        }
    }

    public function registerAction(){
        $user = new UserModel();
    }
}