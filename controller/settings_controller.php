<?php
$settings_notice="";
if(isset($_POST['changeDetails']))
  updateUser();
  function updateUser(){
    require_once("../database/dbconnection.php");
    session_start();
    $connection = new DBConnection;

    $sql = "UPDATE users SET username=?, firstName=?, lastName=?,email=?,phoneNum=? WHERE user_id=?";
    $paramTypes = "ssssii";

    $result = $connection->prep($sql,$paramTypes,$_POST['username'],$_POST['fname'],
                    $_POST['lname'],$_POST['email'],
                    $_POST['phone'],$_SESSION['user_id']);

    if ($result) {
      if($connection->affected_rows($result) > 0){
        header("location: ../pages/account.php");
      }
      else
        $GLOBALS['settings_notice'] = "Could not Register User at this Time";
    } else {
      $GLOBALS['settings_notice'] = "Error: " .$sql."<br>".$connection->error();
    }
    $connection->close($result);
  }

function getFirstName($userID)
{
  require_once("../database/dbconnection.php");
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT firstName FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$row = $userDetails->fetch();
echo $row['firstName'];

}



function getUsername($userID)
{
  require_once("../database/dbconnection.php");
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT username FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$row = $userDetails->fetch();

echo $row['username'];


}

function getLastName($userID)
{
  require_once("../database/dbconnection.php");
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT lastName FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$row = $userDetails->fetch();
echo $row['lastName'];

}



function getEmail($userID)
{
  require_once("../database/dbconnection.php");
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT email FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$row = $userDetails->fetch();
echo $row['email'];


}


function getPhoneNum($userID)
{
  require_once("../database/dbconnection.php");
	//Create Instance of new class
$userDetails = new DBconnection;
$sql= "SELECT phoneNum FROM users WHERE user_id = '$userID'";
$userDetails->query($sql);

$row = $userDetails->fetch();

echo $row['phoneNum'];


}




?>
