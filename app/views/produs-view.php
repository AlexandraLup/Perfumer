
<!DOCTYPE html>
<html lang="RO">

<head>
	 <meta charset="UTF-8">
	<title>Perfumer</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styles.css"    type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">  </script>
	<script>
     $(document).ready(function(){
         var commentCount = 2;
			 $(".commbtn").click(function(){
           $("#comentariu").load("load-comments.php");
			 });

		 });
	</script>
</head>


<body>

	<header>
		<div id="Div" >
			<div id="Div1">
				<form id="search-button" method="post" action="#">
					<input type="search" name="search" id="search" placeholder="Caută..">
				</form>
				<div id="back_result"> 
                </div>  
			</div>

			<div id="Div2">
				<div>
					<h1 class="h1"><a href="index.php">Perfumer</a></h1>
				</div>
			</div>

			<div id="Div3">
				<div>
				<?php 
					if(isset($_SESSION["email"]))

						echo '<p style="color: white;"> Bună, ' . $_SESSION['email'] .
					" <form method='post'  >
					<input type='submit' name='logout' value='logout'>  
					</form> </p>
					";
					else
						echo '<p style="color: white;"> Încă nu ești logat!</p>';
				 ?> 

				</div>
			</div>

		</div>

	</header>

	<nav>
		<ul>
			<li class="FemeiBarbati"><a href='parfumurifemei'>PARFUMURI FEMEI</a></li>
			<li class="FemeiBarbati"><a href='parfumurifemei'>PARFUMURI BĂRBAȚI</a></li>
			<li class="FemeiBarbati"><a href="parfumurifemei">NOUTĂȚI</a></li>
		</ul>

		<ul>
			
			<li class="ContCos"><a href="Login">CONT <i class="fa fa-user-circle" ></i></a></li>
			<li class="ContCos"><a href="ShoppingCart">COȘ <i class="fa fa-shopping-cart"></i></a></li>
			<li class="ContCos"><a href="MyAccount">WISHLIST <i class="fa fa-heart"></i></a></li>
		</ul>
	</nav>

<section>
<div class=produs>
    <img src="<?php echo BASE_URL . $produs["imagine"]?>" style="width:23%; height:23%;">
    <div class="all">
      <div class="titlu-produs">
       <?php echo (strtoupper($produs["nume"]). ' ' . strtoupper($produs["categorie"])); ?>
	  </div>
	  <form id="basket" method="post" action="#">
	  <input type="hidden" name="basket" value=""/>
	  	<table class="table-produs" >
        <tr>
          <th>Cantitate</th>
          <th>Disponibilitate</th> 
          <th>Pre&#355;</th>
				</tr>	   
        <tr>
					<td>
					  <label class="radio_button"  name="quantity"> 30 ml
              <input type="radio" name="quantity" value="30">
				<span class="checkmark"></span>
			</label>
          </td>              
					<td> 
					<?php if(intval($produs["stoc_30"]) == 0) {echo '<p style="color:red">Stoc Insuficient </p>';}
					  elseif(intval($produs["stoc_30"]) > 0 && intval($produs["stoc_30"]) < 5) {echo '<p style="color:orange">Mai putin de 5 bucati! </p>'; }
					  else {echo '<p style="color:green">In stoc </p>';} ?>
          </td> 
					<td> 
					  <?php echo $produs["pret_30"] . ' LEI';?>
          </td> 
        </tr>
				<tr>
				<td>
					  <label class="radio_button"  name="quantity"> 50 ml
              <input type="radio" name="quantity" value="50">
				<span class="checkmark"></span>
			</label>
					</td>    
					<td>              
					<?php if(intval($produs["stoc_50"]) == 0) {echo '<p style="color:red">Stoc Insuficient </p>';}
					  elseif(intval($produs["stoc_50"]) > 0 && intval($produs["stoc_50"]) < 5) {echo '<p style="color:orange">Mai putin de 5 bucati! </p>'; }
					  else {echo '<p style="color:green">In stoc </p>';} ?>
          </td> 
					<td> 
					  <?php echo $produs["pret_50"] . ' LEI';?>
          </td> 
        </tr>
				<tr>
				<td>

					  <label class="radio_button" name="quantity"> 100 ml
              <input type="radio" name="quantity" value="100">
                <span class="checkmark"></span>
			</label>
          </td>                    
					<td> 
					 <?php if(intval($produs["stoc_100"]) == 0) {echo '<p style="color:red">Stoc Insuficient </p>';}
					  elseif(intval($produs["stoc_100"]) > 0 && intval($produs["stoc_100"]) < 5) {echo '<p style="color:orange">Mai putin de 5 bucati! </p>'; }
					  else {echo '<p style="color:green">In stoc </p>';} ?>
          </td> 
					<td> 
					  <?php echo $produs["pret_100"] . ' LEI';?>
          </td> 
        </tr>
	  </table>
	  
	  </form>
	  <form method="post" action="#" id="wishlist">
	  <input type="hidden" name="wishlist" value=""/>
	  </form>
	 <div class="buttons"> 
		<a  id="buttonw" type="submit" value="wishlist" name="wishlist" ><i class="far fa-heart"></i> Adaug&#259; 	&#238;n wishlist</a>
		<a  id="buttonc" type="submit" value="basket" name="basket"><i class="fa fa-shopping-cart"></i> Adaug&#259; &#238;n co&#351;</a>
		
	</div>  
	
  </div>

	</div>
	<div class="detalii-produs2">
	<div class="compozitie">
		<h4>Compozitie</h4>
		  <div class="note">
				<h6><b>Note de baz&#259;: </b> <?php echo $produs["note_baza"] ?> </h6>
			</div>
			<div class="note">
			 <h6><b>Note de inim&#259;: </b> <?php echo $produs["note_inima"] ?> </h6>
		 </div>
		 <div class="note">
			 <h6><b>Note de v&#226;rf: </b> <?php echo $produs["note_varf"] ?> </h6>
		 </div>
		 <div class="note">
			 <h6> <?php echo 'Parfum ' . $produs["esenta"] ; ?></h6>
		 </div>
			</div>
			<div class="descriere">
				<h4>Descriere</h4>
				<?php echo $produs["descriere"]; ?>
		</div>
		</div>

		<div id="adaugacomm" >
			<form method="post" action="#">
			        <label for="name" >Nume</label>
                    <input type="text" id="name" name="name" placeholder="Nume">
			        <label for="comm" >Comentariu</label>
					<textarea name="comm" id="" rows="10" class="form-control" placeholder="Comentariu"></textarea>
					<button type="submit" value="addcomm" name="addcomm">Adaug&#259; comentariu</button>
		    </form>
		</div>
		<div id = "comentariu" >
		 <h4> <strong>Comentarii clien&#355;i </strong> </h4>
    <div id="comments" >
			 <?php 
					foreach($comments as $array) {
								 echo '<h6><strong>' . $array['nume_utilizator'] . '</strong></h6>';
								 echo '<p>' . $array['comentariu'] . '</p>';
								 echo '<br> <br>';
					}

			?>
		</div>
				
	</div>
	<div class="bg-modal">
				<div class="modal-contents">
			
					<div class="close">+</div>
			
					<form action="">
						<a href="login" id="button-model">Intr&#259; &#238;n cont </a>
					</form>
			
				</div>
			</div>

			<div class="quantity-alert">
				<div class="modal-contents">
			
					<div class="qclose">+</div>
			
				<strong> Trebuie s&#259; alegi o cantitate! </strong>
			
				</div>
			</div>

			<div class="stoc-alert">
				<div class="modal-contents">
			
					<div class="sclose">+</div>
			
				<strong>Cantitatea dorit&#259; nu este 	&#238;n stoc! </strong>
			
				</div>
			</div>

			<div class="produs-alert">
				<div class="modal-contents">
			
					<div class="pclose">+</div>
			            <strong > Produsul a fost ad&#259;ugat &#238;n co&#351;! </strong>
					<form action="">
						<a href="shoppingcart" class="button"> Vezi co&#351; </a>
					</form>
			
				</div>
			</div>
				
  </section>
	 <?php 
        if(!isset($_SESSION["email"])){
						echo "
						<script type=\"text/javascript\">
						document.getElementById('buttonw').addEventListener(\"click\", function() {
						document.querySelector('.bg-modal').style.display = \"block\";
						 });
						 document.querySelector('.close').addEventListener(\"click\", function() {
						 document.querySelector('.bg-modal').style.display = \"none\";
						 });	
						 document.getElementById('buttonc').addEventListener(\"click\", function() {
							document.querySelector('.bg-modal').style.display = \"block\";
							});
							document.querySelector('.close').addEventListener(\"click\", function() {
							document.querySelector('.bg-modal').style.display = \"none\";
							});	
				 </script>
						   
						";
				   }
	    else{
			echo "
						<script type=\"text/javascript\">
						document.getElementById('buttonw').addEventListener(\"click\", function() {
						document.getElementById('wishlist').submit();
						});
						document.getElementById('buttonc').addEventListener(\"click\", function() {
							document.getElementById('basket').submit();
							});
				 </script>
						   
				";
		}
		if(isset($cantitate)){
		if($cantitate==false){
				echo "
				
				<script type=\"text/javascript\">
				
				 document.querySelector('.quantity-alert').style.display = \"block\";
				 document.querySelector('.qclose').addEventListener(\"click\", function() {
				 document.querySelector('.quantity-alert').style.display = \"none\";
				 });	
		 </script>
				
				";
		}
	}

	if(isset($stoc)){
		if($stoc==false){
				echo "
				
				<script type=\"text/javascript\">
				
				 document.querySelector('.stoc-alert').style.display = \"block\";
				 document.querySelector('.sclose').addEventListener(\"click\", function() {
				 document.querySelector('.stoc-alert').style.display = \"none\";
				 });	
		 </script>
				
				";
		}
	}

	if(isset($success)){
		if($success==true){
				echo "
				
				<script type=\"text/javascript\">
				
				 document.querySelector('.produs-alert').style.display = \"block\";
				 document.querySelector('.pclose').addEventListener(\"click\", function() {
				 document.querySelector('.produs-alert').style.display = \"none\";
				 });	
		 </script>
				
				";
		}
	}
		 
	 ?>
	<?php include 'footer.php'; ?>