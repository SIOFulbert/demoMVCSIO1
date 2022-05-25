<html>
  <body>
    <h1>Mon template</h1>
    <p>voici mon premiere template sans smarty ni twig</p>
    <?php
    if ( isset($_GET["name"]) && isset($_GET["action"])){
        $controller=$_GET["name"];
        $action=$_GET["action"];
        ContentController::load($controller,$action);
    }
    else{
        ContentController::load('category','list');
    }
    ?>
  </body>
</html>
