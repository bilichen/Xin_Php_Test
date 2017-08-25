<?php

require "Model.class.php";
class UserModel extends Model
{
    public function getList(){
        $sql = 'select * from user';
        return $this->sql_obj->fetchAll($sql);
    }

}
?>