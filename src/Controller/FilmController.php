<?php

// use Core\Database;

class FilmController extends \Core\Controller {

    public function __construct(){
        $this->request = new \Core\Request();
    }


    public function allAction(){
        // echo 'oui';
        $orm = new \Core\ORM();
        $res = $orm->find('films',[]);
        $this->render('index',['films'=>$res]);
        // $film = new \Model\FilmModel($res);
    }

    public function infoAction($id){
        $film = new \Model\FilmModel(['id'=>$id]);
        $this->render('info',['film'=>$film]);
    }


    public function addAction(){
        $this->render('newfilm');
    }
    public function registerAction(){
        $params = $this->request->getQueryParams();
        $user = new \Model\FilmModel($params);
        $user->create();
        header('Location: http://localhost/MVC_PiePHP/film/all');
    }


    public function updateAction($id){
        $params = $this->request->getQueryParams();
        $user = new \Model\FilmModel($params);
        $user->update($id);
        header('Location: http://localhost/MVC_PiePHP/film/info/'.$id);

    }

    public function deleteAction($id){
        $user = new \Model\FilmModel(['id' => $id]);
        $user->delete();
        header('Location: http://localhost/MVC_PiePHP/film/all');
    }
    
}