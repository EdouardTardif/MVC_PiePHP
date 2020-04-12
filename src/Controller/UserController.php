<?php

// use Core\Database;

class UserController extends \Core\Controller {

    public function __construct(){
        $this->request = new \Core\Request();
    }


    public function showAction($id){
        echo " ID de l' utilisateur a afficher : $id" .PHP_EOL;
        // header('Location: http://localhost/MVC_PiePHP/login');
    }

    public function indexAction(){
        // $params = $this->request->getQueryParams();
        // $user = new \Model\UserModel(['id'=>'23']);
        // var_dump($user->article[0]->content);
        // var_dump($user->article[0]->price);

        // $user->food[0]->name;
        // self::render('profile',['user' => $user]);
    }
    public function filterAction(){
    }

    public function addAction(){
        $this->render('register');
    }

    public function registerAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\UserModel($params);
        if (!$user->emailExist()) {
            $user->create();
            // var_dump($user);
            $this->render('comptecreer',['user'=>$user]);
        } else {
            echo 'Email existe deja';
        }
    }

    public function loginAction(){
        if(isset($_SESSION['id'])){
            $user = new \Model\UserModel(['id' => $_SESSION['id']]);
            // var_dump($user);
            $this->render('profile',['user'=>$user]);
        } else {
            $this->render('login');
        }
    }

    public function connecAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\UserModel($params);
        if($id = $user->login()){
            $_SESSION['id'] = $id;
            $user = new \Model\UserModel(['id' => $id]);
            // echo '<pre>';
            // var_dump($user);
            // echo '</pre>';
            $this->render('profile',['user'=>$user]);
        }
    }


    public function profileAction(){
        $user = new \Model\UserModel(['id' => $_SESSION['id']]);
        $this->render('profile',['user'=>$user]);
    }


    public function logoutAction(){
        session_destroy();
        $this->render('deconnexion');
    }

    public function updateAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\UserModel($params);
        $user->update();
        header('Location: http://localhost/MVC_PiePHP/user/profile');

    }

    public function deleteAction(){
        $user = new \Model\UserModel(['id' => $_SESSION['id']]);
        $user->delete();
        $this->render('profile',['user'=>$user]);
    }
}