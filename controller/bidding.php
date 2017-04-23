<?php
/**
 *A controller page that gets informations about that the user need about the item
 *@author Gedeon Niyonkuru
 **/
include("../database/dbcredentials.php");
include("../database/dbconnection.php");

//instantiating the database class
 $database= new DBConnection();

 //connecting to the database
 $database->connect();



 // making sure that the information gotten are secure and then querying the informations.
 $id=$_POST['itid'];
 $sql= "SELECT * FROM items WHERE item_id='$id'";
$result=$database->query($sql)->fetch_assoc();
$aid=$result['auctioneer_id'];
$sql1= "SELECT username FROM users WHERE user_id='$aid'";
$result1=$database->query($sql1)->fetch_assoc();
array_push($result, $result1['username']);
echo json_encode($result);
