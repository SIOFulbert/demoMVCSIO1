<table border="1">
  <tr>
    <td>id</td>
    <td>designation</td>
  </tr>
<?php foreach($this->data as $acateg){?>
  <tr>
  <td><?php echo $acateg->getId()?></td>
  <td><?php echo $acateg->getDesignation()?></td>
 </tr>
<?php }?>
</table>
