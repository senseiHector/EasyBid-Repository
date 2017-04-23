<?php

/**
*This is where the item details are manipulated
*call the sellerupload class
**/
require_once("../classes/sellerupload.php");

$newitem= new sellerupload();
/**
*Check if the upload button is set
*Then insert the item details into the database
**/
 if(isset($_POST["upload"])){
		$newitem->insertnewselleritem();
	}
?>