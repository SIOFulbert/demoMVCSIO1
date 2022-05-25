<?php
class category{

  private $_id;
  private $_designation;

  public function __construct($unid, $unedesignation){
    $this->_id=$unid;
    $this->_designation=$unedesignation;
  }

  public function getId(){
    return $this->_id;
  }

  public function getDesignation(){
    return $this->_designation;
  }

  public function setId($unid){
    $this->_id=$unid;
  }

  public function setDesignation($unedesignation){
      $this->_designation=$unedesignation;
  }

  public function Delete(){
    $dbh = application::getConnexion();

    $sql = "DELETE FROM category WHERE id=?";
    $stmt= $dbh->prepare($sql);
    $stmt->execute([$this->unid]);
  }


  public static function LoadAll(){
    try {
      $dbh = application::getConnexion();

      $sql =  'SELECT * FROM category';

      $lescategories=array();
      foreach  ($dbh->query($sql) as $row) {

         $categ=new category($row['id'],$row['designation']);
         $lescategories[]=$categ;
      }

      return $lescategories;

    }
     catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
  }

}

 ?>
