<?php 
include "header.php";

?>



<section>	
<?php
if(isset($afiseazaPreferinte)){
	echo '<div id="topNoutati">
			<div id="titleTOP">
				<h2 style="font-family: Bitter "><b>Preferințele tale</b></h2>
			</div>
		 <div id="topNoutatiFoto">';
			  
	$output = '';
	if($total_rowP > 0) {
		for ($i=0; $i<$total_rowP;$i++) { 
			$output .= '
			<div class="fotoNoutatiN">
			<div class="col-sm-4 col-lg-3 col-md-3">
			<div class="btnn-1N">
			<img src="'. $produsP[$i]['imagine'] .'" alt="" class="img-responsive" >
			<p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsP[$i]['nume']. ' " >'. $produsP[$i]['nume'] .'</a></strong></p>
			<p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsP[$i]['pret_30'] .' RON</strong>'.'</h4>
			</div>
			</div>
			</div>';
		}
	}else{
		 $output = '<h3>No Data Found</h3>'; 
		}

	echo $output;		
	echo '</div></div>';
	}

?>


<div id="reducere">
			<div id="reducereLeft">
				<a href="#"><img alt="#" class="dimensiuneFoto" src="http://localhost/perfumer/assets/images/Mens.jpg" > </a>
			</div>

			<a href="#">
			<div id="reducereText2"> Descoperă oferta </div> </a>
</div>

<div id="topNoutati">
		<div id="titleTOP">
			<h2 style="font-family: Bitter "><b>TOP NOUTĂȚI</b></h2>
		</div>

		<div id="topNoutatiFoto">
			<?php  
				$output = '';
				if($total_row > 0) {
					for ($i=0; $i<$total_row;$i++) { 
						$output .= '
						<div class="fotoNoutatiN">
						<div class="col-sm-4 col-lg-3 col-md-3">
						<div class="btnn-1N">
						<img src="'. $produs[$i]['imagine'] .'" alt="" class="img-responsive" >
						<p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produs[$i]['nume']. ' " >'. $produs[$i]['nume'] .'</a></strong></p>
						<p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produs[$i]['pret_30'] .' RON</strong>'.'</h4>
						</div>
						</div>
						</div>';
					}
				}else{
					 $output = '<h3>No Data Found</h3>'; 
					}

				echo $output;
			?>
		</div>
</div>

<div id="bestSeller">
		<div id="bestSellerW">
			<div class="bestSellerText">BESTSELLER FEMEI</div>
			<a href="http://localhost/perfumer/bestsellerf">
				<div class="bestSellerText2">Descoperă oferta</div>
			</a>
		</div>

		<div id="bestSellerM">
			<div class="bestSellerText">BESTSELLER BĂRBAȚI</div>
			<a href="http://localhost/perfumer/bestsellerb">
				<div class="bestSellerText2">Descoperă oferta</div>
			</a>
		</div>
</div>


<div id="topBranduri">
	<div id="titleTopBrand">
		<h2 style="font-family: Bitter "><b>TOP BRANDURI</b></h2>
	</div>

	<div id="topBranduriFoto">
		<div class="foto">
			<img alt="dior" src="<?php echo BASE_URL; ?>assets/images/Dior_Logo.png"  width="210">
		</div>
		<div class="foto">
			<img alt="chanel" src="<?php echo BASE_URL; ?>assets/images/Chanel_Logo.png" width="170">
		</div>
		<div class="foto">
			<img alt="DG" src="<?php echo BASE_URL; ?>assets/images/Dolce-Gabbana-Logo.png"  width="200">
		</div>
		<div class="foto">
			<img alt="paco" src="<?php echo BASE_URL; ?>assets/images/paco-rabanne-logo1.png"  width="200">
		</div>

		<div class="foto">
			<img alt="hugo" src="<?php echo BASE_URL; ?>assets/images/Hugo-Boss-Logo.png"  width="200">

		</div>
		<div class="foto">
			<img alt="ck" src="<?php echo BASE_URL; ?>assets/images/calvin-klein-logo.png"  width="200">
		</div>
		<div class="foto">
			<img alt="hermes" src="<?php echo BASE_URL; ?>assets/images/logo-hermes.png"  width="200">
		</div>

	</div>
</div>
	

</section>


<?php  include 'footer.php'   ?>
