<?php


namespace Model;
class UserModel extends \Core\Entity {
    // public $relations = [
    //     'has_many' => ['table'=>'article','key'=>'user_id'],
    //     'has_one' => ['table' => 'promo','key'=>'promo_id'],
    //     'many_to_many' => ['table1' => 'user','table2' => 'food']
    // ];


    public function create(){
        $this->id = $this->orm->create('users',$this->data);
        echo $this->id;
    }

    public function delete(){
        $this->orm->delete('users',$this->id);
        echo 'User deleted'.PHP_EOL;
    }

    public function read(){
        $res = $this->orm->read('users',$this->id);
        return $res;
    }

    public function update(){
        $this->orm->update('users',$_SESSION['id'],$this->data);
        echo 'Updated'.PHP_EOL;
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

    public function login(){
        $res = $this->orm->find('users',['WHERE'=>"email = '$this->email' AND password = '$this->password'"]);
        if(count($res) > 0){
            return $res[0]['id'];
        } else {
            return false;
        }
    }
}