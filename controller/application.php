<?php

class application{

     private static $_template;

     public static function start($letemplate){
           self::$_template="view/".$letemplate;

           include(self::$_template);
     }
}

 ?>
