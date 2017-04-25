<?php
  require_once("../classes/account.php");
  $users = new Account;

  if(isset($_GET['load'])){
    $users->loadAccount($_GET['load']);
  }

?>
