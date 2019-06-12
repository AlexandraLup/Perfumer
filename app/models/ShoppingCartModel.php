<?php
class ShoppingCartModel extends Model {
	
	 public function getBasket($idUser){
        $query="select c.id_produs, p.nume, p.categorie, p.imagine, c.subtotal, c.cantitate, c.ml from produse p join cos_cumparaturi c on c.id_produs = p.id where 
        id_utilizator= '$idUser'"; 
        $result= $this->queryAll($query);
        return $result;
     }

   public function getProductPrice($idProdus, $ml){
      $query = "SELECT pret_30,pret_50,pret_100  FROM  stocuri  WHERE id_produs='$idProdus'";
      $result = $this->query($query);
      $cantitate='pret_' . $ml;
      return $result[$cantitate];
   }

   public function updateQTY($idUser,$idProdus, $quantity,$ml){
      $query= "UPDATE cos_cumparaturi SET cantitate ='$quantity' where id_utilizator='$idUser' and id_produs='$idProdus'";
      $pret = intval($this->getProductPrice($idProdus, $ml));
      $subtotal = intval($quantity) * $pret;
      $query1 =" UPDATE `cos_cumparaturi` SET `subtotal`= '$subtotal' where id_produs='$idProdus' and id_utilizator='$idUser'";
		$result = $this->execute($query);
		$result = $this->execute($query1);
		return $result;
   }

   public function verifyStock($idProdus, $ml){
      $query = "SELECT stoc_30,stoc_50,stoc_100  FROM  stocuri  WHERE id_produs='$idProdus'";
      $result = $this->query($query);
      $cantitate='stoc_' . $ml;
      return $result[$cantitate];
   }

   public function deleteProduct($idProdus, $idUser, $ml){

      $query= "DELETE FROM `cos_cumparaturi` WHERE id_produs='$idProdus' and id_utilizator='$idUser' and ml='$ml'";
      $result = $this->execute($query);
      return $result;
   }
}
?>