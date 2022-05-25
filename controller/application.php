<?php

class application{

     private static $_template;

     private static $db;

     public static function start($letemplate){

          if(!isset(self::$db)){
              self::$db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', '');
          }

           self::$_template="view/".$letemplate;

           include(self::$_template);

     }

     public static function getConnexion(){
       return self::$db;
     }
}

 ?>
