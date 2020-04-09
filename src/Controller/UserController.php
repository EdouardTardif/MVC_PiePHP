<?php

// use Core\Database;

class UserController extends \Core\Controller {

    public function __construct(){
        $this->request = new \Core\Request();
    }

    public function indexAction(){
        // $params = $this->request->getQueryParams();
        $user = new \Model\UserModel(['id'=>'23']);
        var_dump($user->article[0]->content);
        // $user->food[0]->name;
        // self::render('profile',$user);
    }
    public function filterAction(){
    }

    public function addAction(){
        $this->render('register');
    }

    public function registerAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\UserModel($params);
        // var_dump($user);
        // var_dump($user->emailExist());
        if (!$user->emailExist()) {
            $user->create();
        // //     self :: $_render = " Votre compte a ete cree ." . PHP_EOL ;
            echo 'cbon';
        } else {
            echo 'Email existe deja';
        }
    }

    public function loginAction(){
        // $this->render('login');
        // if(isset($_POST['email']) && isset($_POST['password'])){
        //     $user = new \Model\UserModel($_POST['email'],$_POST['password']);
        //     $res = $user->login();
        //     if($res !== null){
        //         session_start();
        //         $_SESSION['id'] = $res->id;
        //         $_SESSION['email'] = $res->email;
        //         $_SESSION['password'] = $res->password;
        //         var_dump($_SESSION);
        //     } else {
        //         echo 'Wrong LOGIN';
        //     }
        // }
    }
}