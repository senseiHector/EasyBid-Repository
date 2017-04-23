<?php

//Function to verify if a user can login
function verifyUsersLogin()
{
	session_start();

if(isset($_SESSION['user_id']) && !empty($SESSION['user_id']))
{

}
else
{
	header('Location: login/');
}
}


function getHeader()
{
	if($_SESSION['type']==2){
		require_once("../layout/adminheader.php");
	}
	else if($_SESSION['type']==1)
	{
		require_once("../layout/standardheader.php");
	}
}

?>

