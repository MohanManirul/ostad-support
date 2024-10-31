<?php

    class Php{

        public static function framework(){
            // echo "cake ph is a framework . \n";
            echo static::getClass();
        }

        // public static function getFramework(){
        //     self::framework() ;
        // }



        public static function getClass(){
           return __CLASS__;
        }



    }

