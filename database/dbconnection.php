<?php
  require_once("dbcredentials.php");
  class DBConnection{

    private $connection;
    public $dbresults;

    function connect(){
      $this->connection = mysqli_connect(SERVERNAME,DBUSER,DBPASSWORD,DATABASE);
      if($this->connection)
        return true;
      else
        return false;
    }

        /* 
  * Database fetch method
  * @return true or false
  */

  public function fetch()
  {
    //check if results has content
    if($this ->dbresults == false)
    {
      return false;
    }

    //return result
    else
      return mysqli_fetch_assoc($this ->dbresults);

  }

    function query($sql){
		if(!$this->connect()){
				return false;
			}else{
				//Run the query
				$dbresults = mysqli_query($this->connection,$sql);
				//check if record returned
				if($dbresults==false){
					return false;					
				}else{
					return true;					
				}
      }
	}

    function get_id(){
      return mysqli_insert_id($this->connection);
    }

    function num_rows($result){
      return mysqli_num_rows($result);
    }

    function affected_rows(){
      return mysqli_affected_rows($this->connection);
    }

    function error(){
      return mysqli_error($this->connection);
    }

    function close(){
      mysqli_close($this->connection);
    }
  }

?>
