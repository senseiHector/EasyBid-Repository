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

    function prep($sql, $par_t, ...$par){
      if(!$this->connect()){
        return false;
      }else{
        $statement = $this->connection->prepare($sql);

        $statement->bind_param($par_t,...$par);

        if($statement->execute()){
          return $statement;
        }
        else{
          echo $this->error();
          return false;
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

    function close($statement = false){
      if($this->connection){
        if(!$statement)
          mysqli_close($this->connection);
        else{
          $statement->close();
          mysqli_close($this->connection);
        }
      }
      else
        return false;
    }
  }
?>
