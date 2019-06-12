<?php 
include "header.php";

?>


		  

<section>
<div class="menu">
    <div class="lista">
    <a href="#"><i class="far fa-heart"></i> Produse favorite</a>
    </div>
    <div class="lista">
    <a href="MyAccount/settings"><i class="far fa-clipboard"></i> Date personale</a>
    </div>
    <div class="lista">
    <a href="MyAccount/comenzi"><i class="fas fa-warehouse"></i> Istoricul comenzilor</a>
    </div>
</div>
<div class="title2">
<h3><b>Wishlist</b></h3>
</div>

<div id="wishlist">
	
	<?php
		$output = '';
        if($rowWish > 0) {
         for ($i=0; $i<$rowWish;$i++) { 
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
            <div class="btnn-1">
                <img src="'. $produsWish[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="#">'. $produsWish[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsWish[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else{ $output = '<h3>Nu aveti nimic in wishlist</h3>'; }


        echo $output;

	?>
	


</div>

</section>

<?php  include 'footer.php'   ?>
