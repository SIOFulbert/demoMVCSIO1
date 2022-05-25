<?php
class ContentController{

    public $name;
    public $action;

    public function __construct($unnom, $uneaction){
      $this->name=$unnom;
      $this->action=$uneaction;
    }

    public static function Load($unnom,$uneaction){
        $lecontrolleur=new ContentController($unnom,$uneaction);

    //    include("controller/".$lecontrolleur->name."Controller.php");

        $file=$lecontrolleur->name."Controller";

        $moninstance=new $file();
        $moninstance->$uneaction();
    }





}
 ?>
