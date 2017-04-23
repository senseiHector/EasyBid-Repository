<?php

  require_once("../database/dbconnection.php");
  $email = $username = $password = $firstname = $lastname = $phone =
  $email_err = $email_error = $username_err = $username_error = $password_error =
  $password_err = $firstname_err = $firstname_error = $lastname_err =
  $lastname_error = $phone_err = $phone_error =  $userStat =
  $login_notice =  $register_notice = "";

  if(isset($_POST['login']))
    validLogin();

  elseif(isset($_POST['register']))
    validRegistry();

  if(isset($_POST["upload"]))
		insertnewselleritem();

  if(isset($_GET['checkU']))
    checkUsername($_GET['checkU']);

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
      loginUser();
    }
  }

  function loginUser(){
    require_once("../database/dbconnection.php");
    $permission = 0;

    $connection = new DBConnection;
    $sql = "SELECT * FROM users WHERE username = \"".$GLOBALS['username']."\" AND status = 1";
    if ($connection->query($sql)) {
      if($connection->num_rows() > 0){
        $row = $connection->fetch();

        if(password_verify($GLOBALS['password'], $row['password'])){
          session_start();
          $_SESSION['firstname'] = $row['firstName'];
          $_SESSION['lastname'] = $row['lastName'];
          $_SESSION['type'] = $row['type'];
          $_SESSION['user_id'] = $row['user_id'];
          $type = $row['type'];
          if($type == "user")
            header('Location: ../pages/home.php');
          else
            header('Location: ../pages/home.php');
        }
        else
          $GLOBALS['login_notice']="</br>Wrong Password";
      }
      else
        $GLOBALS['login_notice']="User Does Not Exist</br>";

      $connection->close();
    } else {
      echo "Error: " . $sql . "<br>" . $connection->error();
    }
  }

  function validRegistry(){
    $valid = true;

    $GLOBALS['firstname'] = isset($_POST['fname'])? clean($_POST['fname']):"";
    if(empty($GLOBALS['firstname'])){
      $GLOBALS['firstname_err'] = " *required";
      $valid = false;
    }
    else{
      $fPattern = preg_match('/^[a-zA-Z]+$/', $GLOBALS['firstname']);
      if(!$fPattern){
        $GLOBALS['firstname_error'] = "First Name Can Only Contain Letters";
        $valid = false;
      }
    }
    $GLOBALS['lastname'] = isset($_POST['lname'])? clean($_POST['lname']):"";
    if(empty($GLOBALS['lastname'])){
      $GLOBALS['lastname_err'] = " *required";
      $valid = false;
    }
    else{
      $lPattern = preg_match('/^[a-zA-Z]+$/', $GLOBALS['lastname']);
      if(!$lPattern){
        $GLOBALS['lastname_error'] = "Last Name Can Only Contain Letters";
        $valid = false;
      }
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
      $uPattern = preg_match('/^[a-zA-Z.]+$/', $GLOBALS['username']);
      if(!$uPattern){
        $GLOBALS['username_error'] = "Username Can Only Contain Letters";
        $valid = false;
      }
    }
    $GLOBALS['password'] = isset($_POST['passwd'])? $_POST['passwd']:"";
    if(empty($GLOBALS['password'])){
      $GLOBALS['password_err'] = " *required";
      $valid = false;
    }
    else{
      $passPattern = preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{6,20}$/', $GLOBALS['password']);
      if(!$passPattern){
        $GLOBALS['password_error'] = "Password Must Include An UpperCase Letter, A LowerCase".
         "Letter,<br> A Number, A Special Character And At Least 6 Characters";
         $valid = false;
       }
     }
    $GLOBALS['email'] = isset($_POST['email'])? clean($_POST['email']):"";
    if(empty($GLOBALS['email'])){
      $GLOBALS['email_err'] = " *required";
      $valid = false;
    }else{
      $emailPattern = preg_match('/\S+@+\S+\.+\S/', $GLOBALS['email']);
      if(!$emailPattern)
        $GLOBALS['email_error'] = "Email is Invalid";
    }

    $GLOBALS['phone'] = isset($_POST['phone'])? clean($_POST['phone']):"";
    if(empty($GLOBALS['phone'])){
      $GLOBALS['phone_err'] = " *required";
      $valid = false;
    }
    else{
      $phonePattern = preg_match('/^[0-9]+$/', $GLOBALS['phone']);
      if(!$phonePattern){
        $GLOBALS['phone_error'] = "Phone Number Can Only Contain Numbers";
        $valid = false;
      }
    }

    if($valid){
      registerUser();
    }
  }

  function registerUser(){
    require_once("../database/dbconnection.php");
    $connection = new DBConnection;

    $type = "user";
    $status = 1;

    $GLOBALS['password'] = password_hash($GLOBALS['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(username, firstName, lastName,email,phoneNum,".
    " password, type,status) VALUES (?,?,?,?,?,?,?,?)";
    $paramTypes = "ssssissi";

    $result = $connection->prep($sql,$paramTypes,$GLOBALS['username'],$GLOBALS['firstname'],
                    $GLOBALS['lastname'],$GLOBALS['email'],
                    $GLOBALS['phone'],$GLOBALS['password'],$type,$status);

    if ($result) {
      if($connection->affected_rows($result) > 0){
        header("location: ../login/index.php");
      }
      else
        $register_notice = "Could not Register User at this Time";
    } else {
      $register_notice = "Error: " .$sql."<br>".$connection->error();
    }
    $connection->close($result);
  }

  function checkUsername($user_name){
    $connection = new DBConnection;

    $sql = "SELECT * FROM users WHERE username = '$user_name'";
    $connection->query($sql);
    if($connection->num_rows() > 0)
      echo "1";
    else
      echo "0";
    $connection->close();
  }

	/**This function inserts the item from the seller into the database
	*@return Boolean   Trueor False
	*/
	function insertnewselleritem(){
	    //get form fields
		$itemname = $_REQUEST['iName'];
		$description = $_REQUEST['description'];
		$condition= $_REQUEST['condition'];
		$basePrice=$_REQUEST['basePrice'];

		//write query to insert
		$sql="INSERT into items (item_name,description,icon_url,list_price,min_price,item_condition,status)
		      VALUES ('$itemname','$description','link',0,'$basePrice','$condition','AVAILABLE')";

		//create an instance of the database
		$insertitem = new DBconnection();
		//Execute query
		$result = $insertitem->query($sql);
		if($result){
			 echo "Item uploaded";
	    }else
	    {
	        echo "Item not uploaded";
	    }
	}
?>
