<?php
class ProdusModel extends Model {
	
	public function getDetails($name)
	{   /*
		$result = $this->query('SELECT p.nume, p.gen,p.categorie,p.esenta,p.descriere,p.imagine,s.stoc_30,s.pret_30,s.stoc_50,s.pret_50, s.stoc_100,s.pret_100 FROM `produse` p inner join stocuri s on p.id=s.id_produs  WHERE nume="'. $name .'"');
		$row = mysqli_fetch_assoc($result);
		mysqli_free_result($result);
		return $row;

		*/
        $query = 'SELECT p.nume, p.gen,p.categorie,p.esenta,p.descriere,p.imagine,s.stoc_30,s.pret_30,s.stoc_50,s.pret_50, s.stoc_100,s.pret_100 , c.note_varf, c.note_inima, c.note_baza FROM `produse` p inner join stocuri s on p.id=s.id_produs  join compozitii c on c.id_produs= p.id WHERE nume="'. $name .'"';
		$result = $this->query($query);
		return $result;
	}
}
?>