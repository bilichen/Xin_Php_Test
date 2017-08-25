<?php

//Model父类
class Model{
    protected $sql_obj;
    //父类构造方法 实现共用的方法，例如：获取连接数据库对象
    public function __construct()
    {
        $config = require 'config.php';
        $this->sql_obj = MySql::getIntence($config);
    }
}
?>