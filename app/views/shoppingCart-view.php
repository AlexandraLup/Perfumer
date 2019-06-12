<?php 
include "header.php";
$valoare = 0;
  
foreach($basket as $product){
 $valoare = $valoare + intval($product['subtotal']);
}

?>

    
<section >

<div class="cos-cumparaturi">

<h2 class="title-cos"> COȘ DE CUMPĂRĂTURI </h2>
<br>

<div class="cos-details" > 
<table class="cos" >

<tr>
<th class="nume-produs"> Produs </th>
<th class="marime-produs" > Mărime </th>
<th class="subtotal-produs"> Subtotal </th>
<th class="cantitate"> Cantitate </th>
<th> </th>
</tr>

  <?php 
     
     foreach($basket as $product){
       $cantitate = $product['cantitate'] ;
       $subtotal = $product['subtotal'];
        echo '<tr>' ; 
        echo '<td>' ; 
        echo '<div class="produs-cos" >';
        echo '<p><b>' . strtoupper($product['nume']) . ' ' . strtoupper($product['categorie']) .'</b> </p>';
        echo ' <img src=" ' .  BASE_URL .  $product['imagine'] . '" style="width:120px;height:140px;" >';
        echo '</div>';
        echo '</td>' ; 
        echo '<td>' ; 
        echo $product['ml'] . ' ML' ; 
        echo '</td>' ; 
        echo '<td>' ; 
        echo $product['subtotal'] . ' LEI' ; 
        echo '</td>' ; 
        echo '<td>' ; 
        echo '<form method="post" action="#">';
        echo ' <input  name="qty" stype="number" min="1" max="20" value="' .$cantitate .'"> ';
        echo '</form>';
        echo '</td>' ; 
        echo '<td>';
        echo '<div class="delete-button">+</div>';
        echo '</td>';
        echo '</tr>';
     }

  ?>

</table >
<div class="summary-div">
   <h4><strong>Rezumat comanda<strong></h4>
      <table class="summary" >
        <tr>
          <th> Valoare <th>
          <td> <?php echo $valoare . ' LEI'; ?> </td>
      </tr>

      <tr>
          <th> Livrare(Fan Courier) <th>
          <td> 15 LEI </td>
      </tr>

      <tr>
          <th>Total <th>
          <td> <?php echo( $valoare + 16) ; ?> </td>
      </tr>
     
</table>
    <a class="button-model" href="proceseazacomanda" > Continua </a>
    </div>
    </div>
    </div>

</section>

<?php  include 'footer.php'   ?>
