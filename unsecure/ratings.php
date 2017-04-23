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
		"Kindly rate this seller";
	}

}

function sitePerformance(){
	$rate = $_REQUEST['rate'];
	$site = $_REQUEST['sitecomments'];
	$statement = "INSERT INTO ratings(rating, comments) VALUES($rate, $site)";
	
	//connect to database
	$db = new connect;

	//execute the query
	$rlt = $db->query($statement);

	if($rlt){
		echo "Thank you for your comments";
	}
	else{
		"Kindly rate this seller";
	}

}
?>