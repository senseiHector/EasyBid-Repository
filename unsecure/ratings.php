<?php

require_once("../database/dbconnection.php");

if(isset($_POST['rate'])){
	sellerPerformance();
	//sitePerformance();
}

if(isset($_POST['ignore'])){
	ignore();
}

function sellerPerformance(){
	//header("Location: ../pages/wonbid.php");

	$rate = $_POST['rate'];
	$comment = $_REQUEST['usercomments'];
	$statement = "INSERT INTO ratings (rating, comments) VALUES('$rate', '$comment')";

	
	//connect to database
	 $db = new dbconnection;

	//execute the query
	$rlt = $db->query($statement);

	if($rlt>0){
		echo "Thank you for your comments";
	}
	else{
		echo "Kindly rate this seller";
	}
	// $exec = $db->preStatement($rate, $comment);
 
}

function sitePerformance(){
	$rate = $_REQUEST['rate'];
	$site = $_REQUEST['sitecomments'];
	$statement = "INSERT INTO ratings(rating, comments) VALUES($rate, $site)";
	
	//connect to database
	$db = new dbconnection;

	//execute the query
	$rlt = $db->query($statement);

	if($rlt){
		echo "Thank you for your comments";
	}
	else{
		"Kindly rate this seller";
	}

}

function ignore(){
	echo "Thank you for using this application";
}
?>