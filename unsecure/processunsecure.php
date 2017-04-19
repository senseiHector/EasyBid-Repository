<?php
  $email = $username = $password = $firstname = $lastname = $gender =
  $email_err = $email_error = $username_err = $password_error = $password_err =
  $firstname_err = $lastname_err = $gender_err =  $userStat = $emailStat =
  $login_notice = "";

  if(isset($_POST['login'])){
    validLogin();
  }
  elseif(isset($_POST['register'])){
    validRegistry();
  }

  function clean($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  function validLogin(){
    $valid = true;

    $GLOBALS['username'] = isset($_POST['username'])? clean($_POST['username']):"";
    if(empty($GLOBALS['username'])){
      $GLOBALS['username_err'] = " *required";
      $valid = false;
    }
    $GLOBALS['password'] = isset($_POST['passwd'])? $_POST['passwd']:"";
    if(empty($GLOBALS['password'])){
      $GLOBALS['password_err'] = " *required";
      $valid = false;
    }

    if($valid){
      login();
    }
  }

  function validRegistry(){
    $valid = true;

    $GLOBALS['firstname'] = isset($_POST['fname'])? clean($_POST['fname']):"";
    if(empty($GLOBALS['firstname'])){
      $GLOBALS['firstname_err'] = " *required";
      $valid = false;
    }
    $GLOBALS['lastname'] = isset($_POST['lname'])? clean($_POST['lname']):"";
    if(empty($GLOBALS['lastname'])){
      $GLOBALS['lastname_err'] = " *required";
      $valid = false;
    }
    $GLOBALS['username'] = isset($_POST['username'])? clean($_POST['username']):"";
    if(empty($GLOBALS['username'])){
      $GLOBALS['username_err'] = " *required";
      $valid = false;
    }
    else{
      $GLOBALS['userStat'] = isset($_POST['userStat'])? clean($_POST['userStat']):"";
      if($GLOBALS['userStat'] !="y")
        $valid = false;
    }
    $GLOBALS['password'] = isset($_POST['passwd'])? $_POST['passwd']:"";
    if(empty($GLOBALS['password'])){
      $GLOBALS['password_err'] = " *required";
      $valid = false;
    }
    $passPattern = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{6,20}$/', $GLOBALS['password']);
    if(!$passPattern)
      $GLOBALS['password_error'] = "<br>Password Must Include An UpperCase Letter, A LowerCase".
       "Letter,<br> A Number, A Special Character And At Least 6 Characters";

    $GLOBALS['email'] = isset($_POST['email'])? clean($_POST['email']):"";
    if(empty($GLOBALS['email'])){
      $GLOBALS['email_err'] = " *required";
      $valid = false;
    }else{
      $GLOBALS['emailStat'] = isset($_POST['emailStat'])? clean($_POST['emailStat']):"";
      if($GLOBALS['emailStat'] !="y")
        $valid = false;
    }
    $emailPattern = preg_match('/\S+@+\S+\.+\S/', $GLOBALS['email']);
    if(!$emailPattern)
      $GLOBALS['email_error'] = "<br>Email is Invalid";


    $GLOBALS['gender'] = isset($_POST['gender'])? clean($_POST['gender']):"";
    if(empty($GLOBALS['gender'])){
      $GLOBALS['gender_err'] = " *required";
      $valid = false;
    }
    $GLOBALS['major'] = isset($_POST['majorSelect'])? clean($_POST['majorSelect']):"";
    if(empty($GLOBALS['major'])){
      $GLOBALS['major_err'] = " *required";
      $valid = falsex;
    }

    if($valid){
      register();
    }
  }
?>