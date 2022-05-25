<?php
class CategoryController{

    public $data;

    public function list(){

        $this->data=category::LoadAll();

        include("view/category/list.php");
    }
}

 ?>
