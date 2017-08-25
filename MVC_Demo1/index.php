<?php

/*
 * MVC思想初步学习
 * M-Model 模形--类，一个表对应一个类，以model结尾命名，例 UserModel.class.php
 * V-View 视图－html显示界面
 * C-Controller 控制－一个模
 * 形对应一个控制类，以c-controller结尾，方法以a-action结尾
 * */

function __autoload($model_name){
    require "{$model_name}.class.php";
}
$userModel = new UserModel();
$row = $userModel->getList();
require "view.php";

?>