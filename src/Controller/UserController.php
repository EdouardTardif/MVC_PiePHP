<?php

// use Core\Database;

class UserController extends \Core\Controller {

    public function indexAction(){
        echo "oui";
        // $db = Database::getDatabase();

    }
    public function filterAction(){
    }

    public function addAction(){
        echo "added";
    }

    public function registerAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\UserModel($params);
        if (!$user->emailExist()) {
            $user->create();
            self :: $_render = " Votre compte a ete cree ." . PHP_EOL ;
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