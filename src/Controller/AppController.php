<?php


// namespace Controller;
class AppController extends \Core\Controller {
    public function indexAction(){
        // echo 'oui app indexAction';
        $this->render('acceuil');
        // self::$_render = "Votre compte a ete cree ." .PHP_EOL;
    }
    public function aboutusAction(){
        // echo 'aboutus';
    }
}