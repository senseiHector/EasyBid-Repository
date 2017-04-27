<?php
  require_once("../classes/account.php");
  $users = new Account;

  if(isset($_GET['load'])){
    $users->loadAccount($_GET['load']);
  }
  if(isset($_GET['bid'])){
    $users->loadBids($_GET['bid']);
  }
  if(isset($_GET['auc'])){
    $users->loadAucs($_GET['auc']);
  }

?>
