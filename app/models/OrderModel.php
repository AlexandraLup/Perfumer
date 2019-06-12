<?php
class OrderModel extends Model {
	
    public function getOrder($idUser, $idOrder){
        $query= "select * from comenzi where id_utilizator='$idUser' and id='$idOrder'";
        $result= $this->query($query);
        return $result;
      }
}
?>