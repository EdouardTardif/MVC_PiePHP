<?php

// use Core\Database;

class UserController extends Controller {

    public function indexAction(){
        // $db = Database::getDatabase();

    }
    public function filterAction(){
        echo 'FILATE;';
        $user = new UserModel('oui@oui.com','1234');
        $user->update('users',['email'=>'test@oui.com','password'=>'oui'],2);
    }
    public function addAction(){
        $user = new UserModel('oui@oui.com','1234');
        $user->create('users',['email'=> 'oui@non.com','password'=>'12345']);
         
    }

    public function registerAction(){
        // $this->render('register');
        // if(isset($_POST['email']) && isset($_POST['password'])){
        //     $user = new UserModel($_POST['email'],$_POST['password']);
        //     $user->save();
        // }    
    }

    public function loginAction(){
        $this->render('login');
        if(isset($_POST['email']) && isset($_POST['password'])){
            $user = new UserModel($_POST['email'],$_POST['password']);
            $res = $user->login();
            if($res !== null){
                session_start();
                $_SESSION['id'] = $res->id;
                $_SESSION['email'] = $res->email;
                $_SESSION['password'] = $res->password;
                var_dump($_SESSION);
            } else {
                echo 'Wrong LOGIN';
            }
        }
    }
}