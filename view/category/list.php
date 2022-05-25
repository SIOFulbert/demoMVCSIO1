<table border="1">
  <tr>
    <td>id</td>
    <td>designation</td>
  </tr>
<?php foreach($this->data as $acateg){?>
  <tr>
  <td><a href="index.php?name=category&action=delete&id=<?php echo $acateg->getId()?>"><?php echo $acateg->getId()?></a></td>
  <td><?php echo $acateg->getDesignation()?></td>
 </tr>
<?php }?>
</table>
