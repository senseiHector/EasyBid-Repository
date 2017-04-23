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
        $this_item = new bid_item($item['item_id'],$item['item_name'],
        $item['description'],$item['icon_url'],$name_['username'],
        $item['list_price'],$item['min_price'],$item['bid_starts'],
        $item['bid_ends'],$item['item_condition'],$item['status']);

        echo json_encode($this_item);
      }
      else{
        return false;
      }
    }
  }

  class bid_item{
    public $item_id;
    public $item_name;
    public $item_description;
    public $item_icon_url;
    public $item_auctioneer;
    public $item_list_price;
    public $item_min_price;
    public $item_bid_starts;
    public $item_bid_ends;
    public $item_condition;
    public $item_status;

    function __construct($item_id,$item_name,$item_description,$item_icon_url,
    $item_auctioneer,$item_list_price,$item_min_price,$item_bid_starts,
    $item_bid_ends,$item_condition,$item_status){
      $this->item_id = $item_id;
      $this->item_name = $item_name;
      $this->item_description = $item_description;
      $this->item_icon_url = $item_icon_url;
      $this->item_auctioneer = $item_auctioneer;
      $this->item_list_price = $item_list_price;
      $this->item_min_price = $item_min_price;
      $this->item_bid_starts = $item_bid_starts;
      $this->item_bid_ends = $item_bid_ends;
      $this->item_condition = $item_condition;
      $this->item_status = $item_status;
    }

  }
  ?>
