<?php
  require_once("dbcredentials.php");
  class DBConnection{


    public $connection;
    public $dbresults;



    function connect(){
      $this->connection = mysqli_connect(SERVERNAME,DBUSER,DBPASSWORD,DATABASE);
      if(mysqli_connect_errno()){
        return false;
      }
      else{
        return true;
      }
    }

    function query($sql){

		if(!$this->connect()){
				return false;
			}
				//Run the query
				$this->dbresults = mysqli_query($this->connection,$sql);
				//check if record returned
				if($this->dbresults==false){
					//return !($this->dbresults==false)
					return false;					
				}else{
					return true;					
				}
      }
      //return $dbresult;

      // if(!$this->connect()){
      //   return false;
      // }else{
      //   //Run the query
      //   $this->dbresults = mysqli_query($this->connection,$sql);
      //   //check if record returned
      //   if($this->dbresults==false){
      //     return false;
      //   }else{
      //     return true;
      //   }
      // }
    


    // function get_id(){
    //   return mysqli_insert_id($this->connection);
    // }

    // function num_rows($result){
    //   return mysqli_num_rows($result);
    // }

    // function affected_rows(){
    //   return mysqli_affected_rows($this->connection);
    // }

    // function error(){
    //   return mysqli_error($this->connection);
    // }

    // function close(){
    //   mysqli_close($this->connection);
    // }

    function fetch(){
      if($this->dbresult==false){
        return false;
      }
      else{
        return  mysqli_fetch_assoc($this->result);
      }
    }
     

    // function fetch(){
    //   if($this->dbresults)
    //     return mysqli_fetch_assoc($this->dbresults);
    //   else
    //     return false;
    // }
    function get_id(){
      if($this->connection){
        return mysqli_insert_id($this->connection);
      }
      else{
        return false;
      }
    }

    function num_rows(){
      if($this->dbresults){
        return mysqli_num_rows($this->dbresults);
      }
      else{
        return false;
      }
    }

    function affected_rows(){
      if($this->connection){
        return mysqli_affected_rows($this->connection);
      }
      else{
        return false;
      }
    }

    function error(){
      if($this->connection){
        return mysqli_error($this->connection);
      }
      else{
        return false;
      }
    }

    function close(){
      if($this->connection){
        mysqli_close($this->connection);
      }
      else{
        return false;
      }

    }


    function preStatement($rate,$comment){
      $connector = mysqli_connect(SERVERNAME,DBUSER,DBPASSWORD,DATABASE);
      $statement = $connector->prepare("INSERT INTO ratings (rate,comments) VALUES (?,?)");
      $statement->bind_param("ss", $rte, $com);

      $rte = $rate;
      $comm = $comment;
      

      $statement -> execute();
      echo "Record created successfully";

      $statement->close();
      $connector->close();


    }
  }

?>
