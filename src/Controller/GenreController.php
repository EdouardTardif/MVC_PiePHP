<?php

// use Core\Database;

class GenreController extends \Core\Controller {

    public function __construct(){
        $this->request = new \Core\Request();
    }


    public function allAction(){
        // echo 'oui';
        $orm = new \Core\ORM();
        $res = $orm->find('genres',[]);
        $this->render('index',['films'=>$res]);
        // $film = new \Model\FilmModel($res);
    }

    public function infoAction($id){
        $film = new \Model\GenreModel(['id'=>$id]);
        $this->render('info',['genre'=>$film]);
    }


    public function addAction(){
        $this->render('newgenre');
    }
    public function registerAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\GenreModel($params);
        var_dump($user);
        $user->create();
        header('Location: http://localhost/MVC_PiePHP/genre/all');
    }

    public function updateAction($id){
        $params = $this->request->getQueryParams();
        // var_dump($params);
        $user = new \Model\GenreModel($params);
        // var_dump($user);
        $user->update($id);
        header('Location: http://localhost/MVC_PiePHP/genre/info/'.$id);

    }

    public function deleteAction($id){
        $user = new \Model\GenreModel(['id' => $id]);
        $user->delete();
        header('Location: http://localhost/MVC_PiePHP/genre/all');
    }
    
}