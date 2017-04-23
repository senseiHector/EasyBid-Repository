<?php
  require_once("../classes/bidder.php");
  $bids = new Bidder;

  if(isset($_GET['load'])){
    $bids->loadItem($_GET['load']);
  }
  if(isset($_POST['bid_mod'])){
    $bids->placeBid($_POST['your_bid'],$_POST['item_id'],$_POST['bidder_id']);
  }

?>
