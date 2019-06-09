<?php
class RegisterModel extends Model {
	
	public function getEmail($email)
	{
		$query= 'select count(email) from utilizatori where email="'. $email .'"';
		$result= $this->query($query);
		return $result;
	}

	public function createAccount($nume, $prenume,$adresa, $sex,$judet,$oras,$cod, $email, $telefon, $parola1)
	{

		$query="insert into utilizatori (nume, prenume, sex, adresa,oras,judet,cod_postal, email,parola, telefon) values ('$nume', '$prenume','$sex','$adresa','$oras','judet','cod', '$email', '$parola1', '$telefon') ";

		$result=$this->queryInsert($query);

	}

	public function getId( $email){

		$query= "select id from utilizatori where email='$email'";
		$result= $this->query($query);
		return $result;
	}

	public function addPreferinte ( $idUser, $preferinta)
	{
		
		$query= "insert into preferinte_utilizator (id_utilizator, esenta) values ('$idUser', '$preferinta')";

		$result=$this->queryInsert($query);

	}

}
?>