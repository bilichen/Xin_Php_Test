<?php

    class Person{
        private $name='小白';
        public static function show(){
            echo "这是Person 普通方法<br>";
        }
//        public static function show1(){
//            echo "这是Person 静态方法 <br>";
//            self::show();
//        }
    }

//Person::show1();
Person::show();


