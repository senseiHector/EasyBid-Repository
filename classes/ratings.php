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

	$rate = $_POST['userstarin'];
	$comment = $_REQUEST['usercomments'];
	$site_rate = $_REQUEST['sitestarin'];
	$site_comment = $_REQUEST['sitecomments'];
	$statement = "INSERT INTO ratings (rating, comments,siteRating,siteComment) VALUES('$rate', '$comment','$site_rate','$site_comment')";
if(empty($_POST['userstarin'])){
	echo "Please rate us";
}
	
	//connect to database
	//  $db = new dbconnection;

	// //execute the query
	// $rlt = $db->query($statement);

	// if($rlt>0){
	// 	echo "Thank you for your comments";
	// }
	// else{
	// 	echo "Kindly rate this seller";
	// }
	// $exec = $db->preStatement($rate, $comment);
 
}

// function sitePerformance(){
// 	$site_rate = $_REQUEST['sitestarin'];
// 	$site_comment = $_REQUEST['sitecomments'];
// 	$statement = "INSERT INTO ratings(siteRating, siteComment) VALUES($site_rate, $site_comment)";
	
// 	//connect to database
// 	$db = new dbconnection;

// 	//execute the query
// 	$rlt = $db->query($statement);

// 	if($rlt){
// 		echo "Thank you for your comments";
// 	}
// 	else{
// 		"Kindly rate this seller";
// 	}

// }

function ignore(){
	echo "Thank you for using this application";
}
?>