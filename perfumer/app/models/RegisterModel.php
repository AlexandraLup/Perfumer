<?php
class RegisterModel extends Model {
	
	public function getEmail($email)
	{
		$query= 'select count(email) from utilizatori where email="'. $email .'"';
		$result= $this->query($query);
		return $result;
	}

	public function createAccount($nume, $prenume,$adresa, $sex, $email, $telefon, $parola1)
	{

		$query="insert into utilizatori (nume, prenume, sex, adresa, email,parola, telefon) values ('$nume', '$prenume','$sex','$adresa', '$email', '$parola1', '$telefon') ";

		$result=$this->queryInsert($query);

	}

}
?>