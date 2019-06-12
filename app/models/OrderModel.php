<?php
class OrderModel extends Model {
	
    public function getOrder($idUser, $idOrder){
        $query= "select * from comenzi where id_utilizator='$idUser' and id='$idOrder'";
        $result= $this->query($query);
        return $result;
      }

      
    public function getPersonalData($idUser){
            
      $query= "select nume,prenume,sex,adresa,email,telefon,oras,judet,cod_postal from utilizatori where id='$idUser'";
      $result= $this->query($query);
      return $result;
   }

   public function getOrderProducts($idOrder){
    $query="select l.subtotal, l.cantitate, l.marime, p.imagine, p.nume, p.categorie from lista_produse l inner join produse p on p.id=l.id_produs where l.id_comanda='$idOrder'";
    $result= $this->queryAll($query);
      return $result;
   }
}
?>