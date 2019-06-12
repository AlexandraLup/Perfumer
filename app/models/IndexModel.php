<?php
class IndexModel extends Model {
	
	public function getDetails()
	{   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id  order by p.id desc  ";

  	$result= $this->queryAll($query);
	return $result;
	}


	public function getEsente($idUser){
		$query=" select esenta from preferinte_utilizator where id_utilizator=$idUser";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsP($esenta1, $esenta2)
	{   
		$query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.esenta in ('$esenta1', '$esenta2')";

  	$result= $this->queryAll($query);
	return $result;
	}

	public function getTotalRow($esenta1, $esenta2)
	{   
		$query = "select count(nou) from (select p.id as nou from produse p join stocuri s on s.id_produs=p.id where p.esenta in ('$esenta1', '$esenta2')) as tabel";

  	$result= $this->query($query);
	return $result;
	}

	
}
?>