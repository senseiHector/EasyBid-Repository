<?php
  /**
  *@author Hector Amoah
  *@version 1.0
  **/

  require_once("../database/dbconnection.php");

  class Bidder extends DBConnection{

    function __construct(){}

    function loadItem($item_id){
      $sql = "SELECT * FROM items WHERE item_id = $item_id";

      if($this->query($sql)){
        $item = $this->fetch();
        $name_sql = "SELECT username FROM users WHERE user_id = \"".
        $item['auctioneer_id']."\"";
        $this->query($name_sql);
        $name_ = $this->fetch();
        if($item['item_condition']=="new")
          $condition = "New";
        elseif($item['item_condition']=="slightlyUsed")
          $condition = "Slightly Used";
        else
          $condition = "Collector's";

        if($item['highest_bid']==null)
          $bid = 0;
        else
          $bid = $item['highest_bid'];

        $this_item = new bid_item($item['item_id'],$item['item_name'],
        $item['description'],$item['icon_url'],$name_['username'],
        $bid,$item['min_price'],strtotime($item['bid_starts']),
        $item['bid_starts'],strtotime($item['bid_ends']),$item['bid_ends'],
        $condition,$item['status']);

        echo json_encode($this_item);
        return $this_item;
      }
      else{
        return false;
      }
    }

    function placeBid($your_bid,$item_id,$bidder_id){
      $sql = "INSERT INTO bids (bid_amount,item_id,bidder_id) VALUES(?,?,?)";
      $paramTypes = "dii";

      $result = $this->prep($sql,$paramTypes,$your_bid,$item_id,$bidder_id);
      if($result){
        $sql_two="UPDATE items SET highest_bid = $your_bid WHERE item_id = $item_id";
        $this->query($sql_two);
        header("location: ../pages/bidding.php?id=$item_id");
      }
      $this->close($result);
    }
  }

  class bid_item{
    public $item_id;
    public $item_name;
    public $item_description;
    public $item_icon_url;
    public $item_auctioneer;
    public $item_highest_bid;
    public $item_min_price;
    public $item_bid_starts;
    public $item_start_time;
    public $item_bid_ends;
    public $item_end_time;
    public $item_condition;
    public $item_status;

    function __construct($item_id,$item_name,$item_description,$item_icon_url,
    $item_auctioneer,$item_highest_bid,$item_min_price,$item_bid_starts,$item_start_time,
    $item_bid_ends,$item_end_time,$item_condition,$item_status){
      $this->item_id = $item_id;
      $this->item_name = $item_name;
      $this->item_description = $item_description;
      $this->item_icon_url = $item_icon_url;
      $this->item_auctioneer = $item_auctioneer;
      $this->item_highest_bid = $item_highest_bid;
      $this->item_min_price = $item_min_price;
      $this->item_bid_starts = $item_bid_starts;
      $this->item_start_time = $item_start_time;
      $this->item_bid_ends = $item_bid_ends;
      $this->item_end_time = $item_end_time;
      $this->item_condition = $item_condition;
      $this->item_status = $item_status;
    }

  }
  ?>
