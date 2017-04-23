<?php

require_once("../databasse/dbconnection.php");

function sellerPerformance(){
	$rate = $_REQUEST['rate'];
	$comment = $_REQUEST['usercomments'];
	$statement = "INSERT INTO ratings(rating, comments) VALUES($rate, $comment)";
	
	//connect to database
	$db = new connect;

	//execute the query
	$rlt = $db->query($statement);

	if($rlt){
		echo "Thank you for your comments";
	}
	else{
		"Kindly rate this application and seller";
	}

}

function sitePerformance(){

}
?>