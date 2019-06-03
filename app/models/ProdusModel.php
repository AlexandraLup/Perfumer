<?php
class ProdusModel extends Model {
	
	public function getDetails($name)
	{   
        $query = 'SELECT p.nume, p.gen,p.categorie,p.esenta,p.descriere,p.imagine,s.stoc_30,s.pret_30,s.stoc_50,s.pret_50, s.stoc_100,s.pret_100 , c.note_varf, c.note_inima, c.note_baza FROM `produse` p inner join stocuri s on p.id=s.id_produs  join compozitii c on c.id_produs= p.id WHERE nume="'. $name .'"';
		$result = $this->query($query);
		return $result;
	}


	public function addToWishlist($idUser, $idProdus){
		$query = "INSERT INTO wishlist(id_utilizator, id_produs) values ('$idUser' , '$idProdus')";
		$result= $this->queryInsert($query);
		return $result;
	}

	public function addToBasket($idProdus,$idUser, $subtotal){
		$query = "INSERT INTO cos_cumparaturi(id_utilizator, id_produs,subtotal,cantitate) values ('$idUser' , '$idProdus', '$subtotal', '1')";
		$result= $this->queryInsert($query);
		return $result;
	}


	public function searchProduct($name){
		
		$query = 'SELECT nume,imagine FROM `produse` WHERE nume="'. $name .'"';
		$result = $this->queryAll($query);
		return $result;
	}

	public function getComments($name){
		$query = 'SELECT c.nume_utilizator, c.comentariu FROM `produse` p inner join `comentarii` c on c.id_produs = p.id WHERE p.nume="'. $name .'" LIMIT 2' ;
		$result = $this->queryAll($query);
		return $result;
	}

}
?>