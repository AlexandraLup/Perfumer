<?php
class ParfumuriFModel extends Model {
	
	public function getDetails()
	{   
        $query = "select imagine, nume, pret from produse where gen='femeie'";

  	$result= $this->queryAll($query);
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