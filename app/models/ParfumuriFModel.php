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
        if(isset($_POST["lowerSlider"], $_POST["upperSlider"]) && !empty($_POST["lowerSlider"]) && !empty($_POST["upperSlider"]))
	{
		$query .= "
		 AND pret BETWEEN '".$_POST["lowerSlider"]."' AND '".$_POST["lowerSlider"]."'
		";
	}

	echo $query;

  		$result= $this->query($query);
	return $result;
	}

	
}
?>