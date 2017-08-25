<?php

//单例设计模式连接数据库
class MySql{
    private $host;
    private $port;
    private $user;
    private $pwd;
    private $charset;
    private  $dbname;

    private $link;

    private static $mySql_conn;

    //初始化参数
    private function init($arrayConfig){
        $this->host = $arrayConfig['host'];
        $this->port = $arrayConfig['port'];
        $this->user = $arrayConfig['user'];
        $this->pwd = $arrayConfig['pwd'];
        $this->charset = $arrayConfig['charset'];
        $this->dbname = $arrayConfig['dbname'];
    }
    //连接数据库
    private function conn(){
        $this->link = mysqli_connect("{$this->host}:{$this->port}",$this->user,$this->pwd,$this->dbname) or die("无法连接数据库");
    }
    //设置字符编码
    private function setCharSet(){
        $sql = "set names {$this->charset}";
        $this->query($sql);
    }
    public function fetchAll($sql){
       $result =  $this->query($sql);
        $array = array();
        while($row=mysqli_fetch_assoc($result)){
            $array[] = $row;
        }
        var_dump($array);
        return $array;
    }
    private function query($sql){
        if(!$result=mysqli_query($this->link,$sql)){
//            echo mysqli_errno().'<br>';
//            echo mysqli_error().'<br>';
            echo "查询语句错误";
        }else{
           return $result;
        }
    }

    private function __construct($arrayConfig)
    {
        $this->init($arrayConfig);
        $this->conn();
        $this->setCharSet();
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public static function getIntence($arrayConfig){
          if(!self::$mySql_conn instanceof self){
              self::$mySql_conn = new MySql($arrayConfig);
          }
        return self::$mySql_conn;
    }

}