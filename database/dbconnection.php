<?php
  require_once("dbcredentials.php");
  class DBConnection{

<<<<<<< HEAD
    public $connection;
    public $result;
=======
    private $connection;
    private $dbresults;
>>>>>>> 4263edc20c0511ae2b244463287c4ea4008d64da

    function connect(){
      $this->connection = mysqli_connect(SERVERNAME,DBUSER,DBPASSWORD,DATABASE);
      if($this->connection)
        return true;
      else
        return false;
    }

    function query($sql){
<<<<<<< HEAD
		if(!$this->connect()){
				return false;
			}
				//Run the query
				$this->result = mysqli_query($this->connection,$sql);
				//check if record returned
				if($this->result==false){
					//return !($this->dbresults==false)
					return false;					
				}else{
					return true;					
				}
      //return $dbresult;
=======
      if(!$this->connect()){
        return false;
      }else{
        //Run the query
        $this->dbresults = mysqli_query($this->connection,$sql);
        //check if record returned
        if($this->dbresults==false){
          return false;
        }else{
          return true;
        }
>>>>>>> 4263edc20c0511ae2b244463287c4ea4008d64da
      }
    }

<<<<<<< HEAD
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
      if($this->result==false){
        return false;
      }
      else{
        return  mysqli_fetch_assoc($this->result);
      }
     
=======
    function fetch(){
      if($this->dbresults)
        return mysqli_fetch_assoc($this->dbresults);
      else
        return false;
    }
    function get_id(){
      if($this->connection)
        return mysqli_insert_id($this->connection);
      else
        return false;
    }

    function num_rows(){
      if($this->dbresults)
        return mysqli_num_rows($this->dbresults);
      else
        return false;
    }

    function affected_rows(){
      if($this->connection)
        return mysqli_affected_rows($this->connection);
      else
        return false;
    }

    function error(){
      if($this->connection)
        return mysqli_error($this->connection);
      else
        return false;
    }

    function close(){
      if($this->connection)
        mysqli_close($this->connection);
      else
        return false;
>>>>>>> 4263edc20c0511ae2b244463287c4ea4008d64da
    }

  }
?>
