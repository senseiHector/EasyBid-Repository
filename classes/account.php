<?php
  /**
  *@author Hector Amoah
  *@version 1.0
  **/

  require_once("../database/dbconnection.php");

  class Account extends DBConnection{

    function __construct(){}

    function loadAccount($user_id){
      $sql = "SELECT * FROM users WHERE user_id = $user_id";

      if($this->query($sql)){
        $user = $this->fetch();

        $this_user = new user($user['user_id'],$user['username'],
        $user['firstName'],$user['lastName'],$user['email'],
        $user['phoneNum']);

        echo json_encode($this_user);
        return $this_user;
      }
      else{
        return false;
      }
    }

    function loadAucs($user_id){
      $sql = "SELECT * FROM items WHERE auctioneer_id = '$user_id'";
      $list = array();
      if($this->query($sql)){

        foreach($this->dbresults as $it){
          $this_list = new item($it['item_id'],$it['item_name'],
          $it['icon_url']);
          array_push($list, $this_list);
        }
        echo json_encode($list);
        return $list;
      }
      else{
        return false;
      }
    }

    function loadBids($user_id){
      $sql = "SELECT * FROM items WHERE item_id IN (SELECT item_id FROM bids WHERE bidder_id = '$user_id')";
      $list = array();
      if($this->query($sql)){

        foreach($this->dbresults as $it){
          $this_list = new item($it['item_id'],$it['item_name'],
          $it['icon_url']);
          array_push($list, $this_list);
        }
        echo json_encode($list);
        return $list;
      }
      else{
        return false;
      }
    }
  }

  class user{
    public $user_id;
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    function __construct($user_id,$username,$firstname,$lastname,
    $email,$phone){
      $this->user_id = $user_id;
      $this->username = $username;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->email = $email;
      $this->phone = $phone;
    }
  }

  class item{
    public $item_id;
    public $item_name;
    public $item_icon_url;


    function __construct($item_id,$item_name,$item_icon_url){
      $this->item_id = $item_id;
      $this->item_name = $item_name;
      $this->item_icon_url = $item_icon_url;
    }
  }
?>
