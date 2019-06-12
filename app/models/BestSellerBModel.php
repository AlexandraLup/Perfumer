<?php

class BestSellerBModel extends Model{

   public function getDetailsBestS()
  {   
        $query = "select p.imagine, p.nume, s.pret_30 from produse p join stocuri s on s.id_produs=p.id where p.gen='barbati' and p.id in (
      select p1.id from produse p1 join lista_produse l on p1.id=l.id_produs  group by p1.id  )";

    $result= $this->queryAll($query);
    return $result;
  }

   public function getRowBestS()
  {   
        $query = "select count(p.id) from produse p join stocuri s on s.id_produs=p.id where p.gen='barbati' and p.id in (
      select p1.id from produse p1 join lista_produse l on p1.id=l.id_produs group by p1.id having count(p1.id)>=2  )";

    $result= $this->query($query);
    return $result;
  }

 




}



?>