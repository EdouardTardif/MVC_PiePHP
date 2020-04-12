<?php



namespace Model;


class GenreModel extends \Core\Entity {

    // public $relations = [
    //     'has_many' => ['table'=>'film','key'=>'id_genre']
    //     // 'has_one' => ['table' => 'genre','key'=>'id_genre']
    //     // 'many_to_many' => ['table1' => 'user','table2' => 'food']
    // ];


    public function create(){
        $this->id = $this->orm->create('genres',$this->data);
        echo $this->id;
    }

    public function delete(){
        $this->orm->delete('genres',$this->id);
        echo 'film deleted'.PHP_EOL;
    }

    public function read(){
        $res = $this->orm->read('genres',$this->id);
        return $res;
    }

    public function update($id){
        $this->orm->update('genres',$id,$this->data);
        echo 'Updated'.PHP_EOL;
    }


    public function emailExist(){
        // echo 'checking this email -->'.$this->email;
        if(isset($this->email)){
            if($this->orm->check('genres',['email'=>$this->email]) > 0) {
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

?>