<?php
    require_once("controller/application.php");
    require_once("model/category.php");


    application::start("templatebase/index.php");


    var_dump(category::LoadAll());
 ?>
