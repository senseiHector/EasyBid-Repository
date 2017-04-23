<?php
  /**
  *This class implements the 
  *@author Lynn Lutubah Mumia
  *@version 1.0
  **/
  
  require_once("../database/dbconnection.php");
	
  class sellerUpload extends DBConnection{
  
	/**This function inserts the item from the seller into the database
	*@return Boolean   True or False
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
	/**
	*This function allows the editting of the item inserted by te seller
	*@param itemname   The name of te item
	**/
	function editselleritem($iname){
	    //get form fields	

		//write query to insert
		$sql="UPDATE items WHERE iten_name='$iname'";

		//create an instance of the database 
		$edititem = new DBconnection();
		//Execute query
		$result = $edititem->query($sql);		
		if($result){
			 echo "Item editted";
	    }else  
	    {  
	        echo "Item edit not succssful";
	    }
	}
  }
  ?>