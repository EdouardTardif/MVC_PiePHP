<?php


namespace Model;
class UserModel extends \Core\Entity {

    public $db;

    public function __construct(){
        $this->db = \Core\Database::getDatabase();
        $this->orm = new \Core\ORM();
    }


    public function create(){
        $orm = new \Core\ORM();
        $orm->find();
    }

    public function emailExist(){
        if(isset($this->email)){
            if($this->orm->check('users',['email'=>$this->email]) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return 'Email non defini';
        }
        
    }
}