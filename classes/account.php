<?php
  /**
  *@author Hector Amoah
  *@version 1.0
  **/

  require_once("../database/dbconnection.php");

  class Account extends DBConnection{

    function __construct(){}

    function loadAccount($user_id){
      $sql = "SELECT * FROM users WHERE user_id = $user_id";

      if($this->query($sql)){
        $user = $this->fetch();

        $this_user = new user($user['user_id'],$user['username'],
        $user['firstName'],$user['lastName'],$user['email'],
        $user['phoneNum']);

        echo json_encode($this_user);
        return $this_user;
      }
      else{
        return false;
      }
    }
  }

  class user{
    public $user_id;
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    function __construct($user_id,$username,$firstname,$lastname,
    $email,$phone){
      $this->user_id = $user_id;
      $this->username = $username;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->email = $email;
      $this->phone = $phone;
    }
  }
?>
