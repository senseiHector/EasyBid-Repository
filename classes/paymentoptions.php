<?php
  /**
  *This is the class that evaluates the payment options chosen by the buyers
  *@author Lynn Lutubah Mumia
  *@version 1.0
  **/
  
   //include the database class
   require_once("../database/dbconnection.php");
   
   class paymentOption extends DBConnection{  
  //Properties
  //Conctructor
  //Methods
  /**
  *This is the method stores the userid with the payment option they chose
  *@param userid
  *@param paymentOption
  **/
  public function insertnewpaymentOption(){
	  $sql="INSERT into ";
	  
  }
 /**
  *This is the method stores the userid with the new payment option they chose
  *@param userid
  *@param paymentOption
  **/
  public function changepaymentOption(){
	  
  }
 }
  
  ?>