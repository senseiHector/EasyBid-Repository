

<?php
/**
* @author Frances Efua Antwiwah Antwi-Donkor
* This class contains the php rating page used to input the stars and comments into the database
**/

/**
* Database class is needed
**/
require_once("../database/dbconnection.php");

/**
* 
**/
$notice="";
if(isset($_POST['rate'])){
	sellerPerformance();

}

if(isset($_POST['ignore'])){
	ignore();
}

function sellerPerformance(){
	
	//variables are defined
	$rate = $_POST['userstarin'];
	$comment = $_REQUEST['usercomments'];
	$site_rate = $_REQUEST['sitestarin'];
	$site_comment = $_REQUEST['sitecomments'];
	$statement = "INSERT INTO ratings (rating, comments,siteRating,siteComment) VALUES('$rate', '$comment','$site_rate','$site_comment')";
	/**validation of the page
	* These methods check if the stars and comments are empty
	**/
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

	//check the result
	if($rlt>0){
		echo "Thank you for your comments";
	}
	else{
		echo "Kindly rate this seller";
	}

}
 
}

/**
* check if the user clicked no thanks
**/
function ignore(){
	echo "Thank you for using this application";
}
?>