<?php

function getFirstName($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT fname FROM usertable WHERE userID = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}



function getLastName($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT lname FROM usertable WHERE userID = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}

function getEmail($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT email FROM usertable WHERE userID = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}


function getPassword($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT password FROM usertable WHERE userID = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}


function getPhoneNum($userID)
{
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT phoneNum FROM usertable WHERE userID = '$userID'";
$userDetails->query($sql);

$userDetails->fetch();
echo $userDetails;

}




?>