<?php
class ParfumuriBModel extends Model {
	
	public function getDetails()
	{   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='barbati'";

  	$result= $this->queryAll($query);
	return $result;
	}

	public function getRowCount()
	{   
        $query = "select count(nume) from produse where gen='barbati'";
        if(isset($_POST["lowerSlider"], $_POST["upperSlider"]) && !empty($_POST["lowerSlider"]) && !empty($_POST["upperSlider"]))
	{
		$query .= "
		 AND pret BETWEEN '".$_POST["lowerSlider"]."' AND '".$_POST["lowerSlider"]."'
		";
	}

	
  		$result= $this->query($query);
	return $result;
	}

	
}
?>