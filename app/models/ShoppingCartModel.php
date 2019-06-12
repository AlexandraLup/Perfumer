<?php
class ShoppingCartModel extends Model {
	
	 public function getBasket($idUser){
        $query="select c.id_produs, p.nume, p.categorie, p.imagine, c.subtotal, c.cantitate, c.ml from produse p join cos_cumparaturi c on c.id_produs = p.id where 
        id_utilizator= '$idUser'"; 
        $result= $this->queryAll($query);
        return $result;
     }
}
?>