
<?php   include 'header.php'; ?>
<section>
<div class="menu">
    <div class="lista">
    <a href="http://localhost/perfumer/MyAccount"><i class="far fa-heart"></i> Produse favorite</a>
    </div>
    <div class="lista">
    <a href="settings"><i class="far fa-clipboard"></i> Date personale</a>
    </div>
    <div class="lista">
    <a href="#"><i class="fas fa-warehouse"></i> Istoricul comenzilor</a>
    </div>
</div>
<div class="title1">
<h3> Comenzi </h3>
<p> Vizualizați toate comenzile actuale și precedente aici.</p>
</div>
<br>
<div class="history">
  <?php 
        foreach($details as $array){
            echo '<a href="http://localhost/perfumer/order/search/'.$array['id']. ' " >' ;
             echo '	<div class="order">';
             echo ' <div class="order-info">';
             echo ' <p style="width:100%; padding:5px;"><b>NUMĂR COMANDĂ : ' . $array['id'] . '</b></p>';
             echo ' <p style="font-size:10px;"> <b> '. $array['data'] . ' </b></p>';
             echo '</div>';
             echo'<div class="order-status" style="padding:10px;">';
             if(strcmp($array['status'],'expediata')==0){
                 echo '<p  ><b>Expediată</b></p>';
             }else if(strcmp($array['status'],'livrata')==0){
                 echo ' <p style="color:green;"><b>Livrată</b></p>';
             }else{
                echo ' <p ><b>In curs de procesare</b></p>';
             }
             echo '</div>';
             echo '</div>';
             echo '</a>';
        }
  ?>

</div>
</section>

<?php   include 'footer.php'; ?>