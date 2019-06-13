<?php
class ProceseazaComandaModel extends Model {

    public function getBasket($idUser){
        $query="select id_produs, subtotal, cantitate,ml  from cos_cumparaturi  where id_utilizator= '$idUser'"; 
        $result= $this->queryAll($query);
        return $result;
     }

     public function getPersonalData($idUser){
            
        $query= "select nume,prenume,adresa,email,telefon,oras,judet,cod_postal from utilizatori where id='$idUser'";
        $result= $this->query($query);
        return $result;
     }

     public function deleteBasket($idUser){
        $query= "DELETE FROM `cos_cumparaturi` WHERE id_utilizator='$idUser'";
        $result = $this->execute($query);
        return $result;
     }

     public function proceseazaComanda($idUser, $valoare, $idOrder){
        $query= "INSERT INTO comenzi(id, id_utilizator, valoare, data, status) values ('$idOrder', '$idUser', '$valoare', CURRENT_DATE,'in curs de procesare')";
        $result = $this->execute($query);
        return $result;
    }

    public function addProduct($idOrder, $idProdus, $subtotal, $cantitate, $ml){
        $query="INSERT INTO lista_produse(id_comanda,id_produs,subtotal, cantitate,marime) values ('$idOrder', '$idProdus','$subtotal','$cantitate' , '$ml')";
        $result = $this->execute($query);
        return $result;
    }

    public function verifyStock($idProdus, $ml){
        $query = "SELECT stoc_30,stoc_50,stoc_100  FROM  stocuri  WHERE id_produs='$idProdus'";
        $result = $this->query($query);
        $cantitate='stoc_' . $ml;
        return $result[$cantitate];
     }

    public function updateStock($idProdus, $cantitate){
        $query="UPDATE stocuri set stoc_100=stoc_100 - '$cantitate', stoc_50=stoc_50 - '$cantitate' , stoc_30=stoc_30- '$cantitate' where id_produs='$idProdus'" ;
        $result = $this->execute($query);
        return $result;
    }
}
?>