<?php
class IndexModel extends Model {
	
	public function getDetails()
	{   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id  order by p.id desc  ";

  	$result= $this->queryAll($query);
	return $result;
	}

	public function getDetailsAsc(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='femeie' order by p.id desc  ";
		$result= $this->queryAll($query);
		return $result;
	}

	public function getDetailsDesc(){
		$query= "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='barbati' order by p.id desc  ";
		$result= $this->queryAll($query);
		return $result;
	}


	public function getRowCount()
	{   
        $query = "select count(nume) from produse  ";

  		$result= $this->query($query);
		return $result;
	}

	
}
?>