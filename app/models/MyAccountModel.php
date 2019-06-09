<?php

class MyAccountModel extends Model{

    public function getId( $email){

		$query= "select id from utilizatori where email='$email'";
		$result= $this->query($query);
		return $result;
	}

   public function getOrders($idUser){
            
       $query= "select * from comenzi where id_utilizator='$id'";
       $result= $this->query($query);
       return $result;
    }


    public function getPersonalData($idUser){
            
        $query= "select nume,prenume,sex,adresa,email,telefon from utilizatori where id='$idUser'";
        $result= $this->query($query);
        return $result;
     }




}



?>