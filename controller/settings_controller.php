<?php

function getFirstName($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT firstName FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}



function getUsername($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT username FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}

function getLastName($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT lastName FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}



function getEmail($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT email FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}


function getPassword($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT password FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}


function getPhoneNum($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT phoneNum FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}




?>