<?php include "header.php" ; var_dump($products); ?>
<section>
<div class="info-order">
<div class="status-order">
<p> <b> <?php  echo $order['status'] ?> </b></p>
<p> #<?php  echo $order['id'] ?> </p>
</div>
<div class="status-order">
<p><b><?php echo $order['data'] ;?> </b> </p>
<p> <?php  echo $order['valoare'] . ' LEI' ?> </p>
</div>
</div>
<div class="date-comanda">
<div class="livrare" style="width:50%;">
<h5><b> LIVRARE</b> </h4>
<br>
<h6> Tip de livrare </h6>
<p> Livrare standard(2-4 zile, 15 LEI) </p>
<h5> ADRESĂ DE LIVRARE </h5>
<p>  <?php echo  $user['adresa'] . ', ' . $user['cod_postal']  . ', ' . $user['oras'] . ', ' . $user['judet'] ;?></p>
<h5> Număr de telefon pentru actualizări privind livrarea </h5>
<p>  <?php echo  $user['telefon'] ; ?></p>
</div>

<div class="plati" style="width:50%;">
<h5><b> PLĂȚI </b></h4>
<br>
<h6> Metodă de plată</h6>
<p>Plată La Livrare </p>
</div>
</div>

<div class="products">

<table class="cos" >

<tr>
<th class="nume-produs"> Produs </th>
<th class="marime-produs" > Mărime </th>
<th class="subtotal-produs"> Subtotal </th>
<th class="cantitate"> Cantitate </th>
<th> </th>
</tr>

  <?php 
     
     foreach($products as $product){
        $cantitate = $product['cantitate'] ;
        echo '<tr>' ; 
        echo '<td>' ; 
        echo '<div class="produs-cos" >';
        echo '<p><b>' . strtoupper($product['nume']) . ' ' . strtoupper($product['categorie']) .'</b> </p>';
        echo ' <img src=" ' .  BASE_URL .  $product['imagine'] . '" style="width:120px;height:140px;" >';
        echo '</div>';
        echo '</td>' ; 
        echo '<td>' ; 
        echo $product['marime'] . ' ML' ; 
        echo '</td>' ; 
        echo '<td>' ; 
        echo $product['subtotal'] . ' LEI' ; 
        echo '</td>' ; 
        echo '<td>' ; 
        echo $cantitate ;
        echo '</td>' ; 
        echo '</tr>';
     }

  ?>

</table >

</div>

</section>
<?php include "footer.php" ?>
