<?php
  require_once("dbcredentials.php");
  class DBConnection{

    private $connection;
    private $dbresults;

    function connect(){
      $this->connection = mysqli_connect(SERVERNAME,DBUSER,DBPASSWORD,DATABASE);
      if($this->connection)
        return true;
      else
        return false;
    }

    function query($sql){
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
      }
    }

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
    }
  }
?>
