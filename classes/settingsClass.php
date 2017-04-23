<?php 

class modifyDetails extends DBconnection
{
	public function loadFirstName()
	{
		$this->connection();
		$sql = "SELECT firstname FROM users WHERE user_id=$userID";
		$this->query($sql);
		while ($name = $this->fetch())
		{
			return $name['fname'];
		}
	}


	public function loadlastName()
	{
		$this->connection();
		$sql = "SELECT lname FROM usertable WHERE userid=$useid";
		$this->query($sql);
		while ($name = $this->fetch())
		{
			return $name['lname'];
		}
	}


	public function loadEmail()
	{
		$this->connection();
		$sql = "SELECT email FROM usertable WHERE userid=$useid";
		$this->query($sql);
		while ($email = $this->fetch())
		{
			return $email['email'];
		}
	}

	public function loadPhoneNum()
	{
		$this->connection();
		$sql = "SELECT phoneNum FROM usertable WHERE userid=$useid";
		$this->query($sql);
		while ($email = $this->fetch())
		{
			return $email['phoneNum'];
		}
	}


	public function updateDetails($fname,$lastname,$username,$password,$phoneNum)
	{
		$this->connection();
		$sql = "UPDATE usertable SET first_name=$firstname";
		$this->query($sql);
		while ($email = $this->fetch())
		{
			return $email['phoneNum'];
		}
	}
}

 ?>