<?php

require "Model.class.php";
class UserModel extends Model
{
    public function getList(){
        $sql = 'select * from user';
        return $this->sql_obj->fetchAll($sql);
    }
    public function del($id){
        $sql = "delete from user where id='$id'";
        $this->sql_obj->del($sql);
    }

}
?>