<?php
class ParfumuriFModel extends Model {
	
	public function getDetails()
	{   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie'";

		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsAsc(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' order by s.pret_30 asc";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsDesc(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' order by s.pret_30 desc";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsNoi(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' order by p.id desc  ";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsVandut(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' and p.id in (
			select p1.id from produse p1 join lista_produse l on p1.id=l.id_produs  group by p1.id  )";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getRowVandut(){
		// s au vandut mai mult de 2 ... momentan
		$query= "select count(p.id) from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' and p.id in (
			select p1.id from produse p1 join lista_produse l on p1.id=l.id_produs group by p1.id having count(p1.id)>=2  )";
		$result= $this->query($query);
		
		return $result;
	}


	

	public function getRowCount()
	{   
        $query = "select count(nume) from produse where gen='femeie'";
  		$result= $this->query($query);
		return $result;
	}

	
}
?>