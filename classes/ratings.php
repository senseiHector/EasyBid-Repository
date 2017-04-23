<?php

require_once("../database/dbconnection.php");
$notice="";
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
if(empty($_POST['userstarin'] || $_POST['sitestarin'])){
	$GLOBALS['notice'] = "Please rate us ";
	
}
if(empty($_POST['usercomments'])|| $_POST['sitecomments']){
	
	$GLOBALS['notice'] .= "<br>" . "Your comment is highly valued, please add a comment";
}
else{
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


}
	
	
 
}


function ignore(){
	echo "Thank you for using this application";
}
?>