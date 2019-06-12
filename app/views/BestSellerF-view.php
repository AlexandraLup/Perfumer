<?php 
include "header.php";

?>


		  

<section>

    <div style="background-color: white;  overflow:hidden;">

<div class="title2">
<h3><b>BESTSELLER FEMEI</b></h3>
</div>



    <div id="columnWish">
	
	<?php
		$output = '';
        if($rowWish > 0) {
         for ($i=0; $i<$rowWish;$i++) { 
            $output .= '
            <div class="fotoNoutatiWish">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1Wish">
                <img src="'. $produsWish[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsWish[$i]['nume']. ' " >'. $produsWish[$i]['nume'] .'</a></strong></p>
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


</div>
</section>

<?php  include 'footer.php'   ?>
