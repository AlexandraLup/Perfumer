
 
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


</head>


<body>

	<header>
		<div id="Div" >
			<div id="Div1">
				<form id="search-button" >
					<input type="search" placeholder="Caută..">
				</form>
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
