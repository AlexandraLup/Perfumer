<?php
class AdminModel extends Model {

    public function addProduct($barcode, $name,$gender, $category,$essence,$description,$image){
        $query = "INSERT INTO produse(id, nume,gen,categorie,esenta,descriere,imagine) values ('$barcode', '$name','$gender', '$category','$essence',
        '$description','$image') ";
        $result=$this->queryInsert($query);
    }

    public function addStock($barcode, $qty1, $price1, $qty2, $price2, $qty3, $price3){
        $query = "insert into stocuri(id_produs,stoc_30,pret_30,stoc_50,pret_50,stoc_100,pret_100) values ('$barcode','$qty1','$price1','$qty2',
        '$price2','$qty3','$price3')" ;
        $result=$this->queryInsert($query);
    }

    public function addComposition($barcode,$base, $top, $heart){

        $query = "insert into compozitii(id_produs, note_baza, note_inima, note_varf) values ('$barcode','$base','$heart','$top')";
        $result=$this->queryInsert($query);
    }

    public function deleteProduct($barcode){
        $query = 'DELETE from produse WHERE id="'. $barcode .'"';
        $result = $this->execute($query);
        return $result ;
    }

    public function getRaport($categorie){

        $query = "select p.id, p.nume, p.esenta, s.stoc_30, s.stoc_50, s.stoc_100 from produse p join stocuri s on p.id=s.id_produs where p.categorie='$categorie'";
        
        $result = $this->queryAll($query);
        
        return $result ;
    }

     public function getTotalRaport($categorie){
        $query = "select count(p.id) from produse p join stocuri s on p.id=s.id_produs where p.categorie='$categorie'";
        
        $result = $this->query($query);
        return $result ;
    }

     public function getRaportVanzari($categorie){

        $query = "select p.id, p.nume, lp.cantitate from produse p join stocuri s on p.id=s.id_produs join lista_produse lp on lp.id_produs=p.id where p.categorie='$categorie' group by lp.id_produs ";
        
        $result = $this->queryAll($query);
        
        return $result ;
    }

       public function getTotalRaportVanzari($categorie){
        $query = "select count(distinct lp.id_produs) from produse p join stocuri s on p.id=s.id_produs join lista_produse lp on lp.id_produs=p.id where p.categorie='$categorie' ";
        
        $result = $this->query($query);
        return $result ;
    }

}


?>