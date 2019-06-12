<?php 
include "header.php";

?>


		  

<section>

    <div style="background-color: white;  overflow:hidden;">
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



    <div id="columnWish">
	
	<?php
		$output = '';
        if($rowWish > 0) {
         for ($i=0; $i<$rowWish;$i++) { 
            $output .= '
            <div class="fotoNoutatiWish">
            <div class="col-sm-4 col-lg-3 col-md-3">

              <div class="btnn-1Wish">
                
                <div class=imagineWish>
                <img src="'. $produsWish[$i]['imagine'] .'" alt="" class="imagineWish2" >
                </div>

                <div class="textWish">
                    <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsWish[$i]['nume']. ' " >'. $produsWish[$i]['nume'] .'</a></strong></p>
                </div>

                <div class="pretWish"
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsWish[$i]['pret_30'] .' RON</strong>'.'</h4>
                </div>

                <div class="eliminaWish">
                <form action="" method="POST">
                    <button style="color: white; "class="containerRemoveButon" type="submit" value="'. $produsWish[$i]['id'] . '" name="elimina">Elimină</button>
                 </form>
                </div>

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
