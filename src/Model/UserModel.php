<?php


namespace Model;
class UserModel extends \Core\Entity {
    public $relations = [
        'has_many' => ['table'=>'article','key'=>'user_id'],
        'has_one' => ['table' => 'promo','key'=>'promo_id'],
        'many_to_many' => ['table1' => 'user','table2' => 'food']
    ];


    public function create(){
        $this->id = $this->orm->create('users',$this->data);
        echo $this->id;
    }

    public function emailExist(){
        // echo 'checking this email -->'.$this->email;
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