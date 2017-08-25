<?php

class UserController{

    public function showListAction(){
        $userModel = new UserModel();
        $row = $userModel->getList();
        require "view.php";
    }
    public function addAction(){
        require "add.php";
    }
    public function delAction(){
        $id = $_GET[id];
        $userModel = new UserModel();
        $userModel->del($id);
        header('location:index.php?c=User&a=showList');

    }
}

