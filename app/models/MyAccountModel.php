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





   public function getDetailsWish($id)
  {   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id join wishlist w on w.id_produs=p.id where w.id_utilizator='$id'";

    $result= $this->queryAll($query);
    return $result;
  }

   public function getRowWish($id)
  {   
        $query = "select count(p.id) from produse p join stocuri s on s.id_produs=p.id join wishlist w on w.id_produs=p.id where w.id_utilizator='$id'";

    $result= $this->query($query);
    return $result;
  }




}



?>