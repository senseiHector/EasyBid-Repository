<?php
  /**
  *This class implements the
  *@author Lynn Lutubah Mumia
  *@version 1.0
  **/

  require_once("../database/dbconnection.php");

  class sellerUpload extends DBConnection{

	/**This function inserts the item from the seller into the database
	*@return Boolean   True or False
	*/
	function insertnewselleritem(){

	    //get form fields
		$itemname = $_REQUEST['iName'];
		$description = $_REQUEST['description'];
		$condition= $_REQUEST['condition'];
		$basePrice=$_REQUEST['basePrice'];
    $bid_starts= str_replace("T", " ",$_REQUEST['start']);
		$bid_ends= str_replace("T", " ",$_REQUEST['end']);
    $icon=($_FILES['file']['name']);
    session_start();
    $user_id = $_SESSION['user_id'];

    $target = "../image/items/";
    $target = $target . basename( $_FILES['file']['name']);
		//write query to insert
		$sql="INSERT into items (item_name,description,icon_url, auctioneer_id, min_price, bid_starts, bid_ends, item_condition,status)
		      VALUES ('$itemname','$description','$target', $user_id, '$basePrice','$bid_starts', '$bid_ends', '$condition','available')";


		//Execute query
		$result = $this->query($sql);
		if($result){
            // Writes the photo to the server
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
        {
        // Redirects you if its all ok
        header("location: ../pages/items.php");
        }
        else {
        // Gives and error if its not
        echo "Sorry, there was a problem uploading your file.";
        header("location: ../pages/items.php");
        }
	    }else
	    {
	        echo $this->error();
	    }
	}
	/**
	*This function allows the editting of the item inserted by te seller
	*@param itemname   The name of te item
	**/
	// function editselleritem($iname){
	//     //get form fields
	// 	//write query to insert
	// 	//$sql="UPDATE items SET bid_ends = "2017-04-23 14:00" WHERE item_id=1";
  //
	// 	//create an instance of the database
	// 	$edititem = new DBconnection();
	// 	//Execute query
	// 	$result = $edititem->query($sql);
	// 	if($result){
	// 		 echo "Item editted";
	//     }else
	//     {
	//         echo "Item edit not successful";
	//     }
	//    }
  }
  ?>
