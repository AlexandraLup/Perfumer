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

}


?>