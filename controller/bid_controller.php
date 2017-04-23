<?php
  require_once("../classes/bidder.php");
  $bids = new Bidder;

  if(isset($_GET['load'])){
    $bids->loadItem($_GET['load']);
  }
?>
