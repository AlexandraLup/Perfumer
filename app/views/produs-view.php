
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
	  <form method="post" action="#">
	  	<table class="table-produs" >
        <tr>
          <th>Cantitate</th>
          <th>Disponibilitate</th> 
          <th>Pret</th>
				</tr>	   
        <tr>
					<td>
					  <label class="radio_button"  name="quantity"> 30 ml
              <input type="radio" name="quantity" value="<?php echo $produs["pret_30"] ?>">
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
              <input type="radio" name="quantity" value="<?php echo $produs["pret_50"] ?>">
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
              <input type="radio" name="quantity" value="<?php echo $produs["pret_100"] ?>">
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
	 <div class="buttons"> 
		<button type="submit" value="wishlist" name="wishlist" ><i class="far fa-heart"></i> Adauga in wishlist</button>
		<button type="submit" value="basket" name="basket"><i class="fa fa-shopping-cart"></i> Adauga in cos</button>
	</div>  
		</form>
  </div>

	</div>
	<div class="detalii-produs2">
	<div class="compozitie">
		<h4>Compozitie</h4>
		  <div class="note">
				<h6><b>Note de baza: </b> <?php echo $produs["note_baza"] ?> </h6>
			</div>
			<div class="note">
			 <h6><b>Note de inima: </b> <?php echo $produs["note_inima"] ?> </h6>
		 </div>
		 <div class="note">
			 <h6><b>Note de varf: </b> <?php echo $produs["note_varf"] ?> </h6>
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
		<div id = "comentariu" >
		 <h3> Comentarii clienti </h3>
    <div id="comments" >
			 <?php 
					foreach($comments as $array) {
								 echo '<p>' . $array['nume_utilizator'] . '</p>';
								 echo '<p>' . $array['comentariu'] . '</p>';
					}

			?>
		</div>
		<button class="commbtn"> Arata mai multe comentarii </button>
	</div>
	<div class="bg-modal">
				<div class="modal-contents">
			
					<div class="close">+</div>
			
					<form action="">
						<a href="#" class="buttonb">Intra in cont </a>
					</form>
			
				</div>
			</div>
  </section>

	<?php include 'footer.php'; ?>