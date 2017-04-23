<?php
  /**
  *@author Hector Amoah
  *@version 1.0
  **/

  require_once("../database/dbconnection.php");

  class ItemList extends DBConnection{

    function __construct(){}

    function loadItems(){
      $sql = "SELECT * FROM items";
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
