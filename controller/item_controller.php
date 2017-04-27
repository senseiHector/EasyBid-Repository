<?php
  require_once("../classes/item.php");
  $items = new ItemList;

  if(isset($_GET['load'])){
    $items->loadItems();
  }
  if(isset($_GET['search'])){
    $items->searchItems($_GET['search']);
  }

?>
