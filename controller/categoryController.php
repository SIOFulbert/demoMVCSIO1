<?php
class CategoryController{

    public $data;

    public function list(){

        $this->data=category::LoadAll();

        include("view/category/list.php");
    }

    public function delete(){
      $this->data=category::LoadOne($GET["id"]);
      include("view/category/delete.php");
    }
}

 ?>
