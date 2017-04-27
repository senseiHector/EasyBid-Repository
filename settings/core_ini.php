<?php
  session_start();

  function isLoggedIn(){

    if(isset($_SESSION['username']) && isset($_SESSION['user_id'])){
      if($_SESSION['type']=="user"){
        require_once("../layout/standardheader.php");
      }
      else{
        require_once("../layout/adminheader.php");
      }
    }
    else
      header("Location: ../login/index.php?ses=1");
  }

?>
