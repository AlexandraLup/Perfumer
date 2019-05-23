<?php
class LoginModel extends Model {
	
	public function getEmail($email)
	{
		$query= 'select count(email) from utilizatori where email="'. $email .'"';
		$result= $this->query($query);
		return $result;
	}

	public function getPassword($email)
	{
		$query= 'select * from utilizatori where email="'. $email .'"';
		$result= $this->query($query);
		return $result;
	}
}
?>