
 
<!DOCTYPE html>
<html lang="RO">

<head>
	 <meta charset="UTF-8">
	<title>Perfumer</title>
	<script src="js/jquery.1.7.2.min.js" type="text/javascript">  </script>
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
				<form id="search-button" method="post" action="#">
					<input type="search" name="search" id="search" placeholder="Caută..">
				</form>
				<div id="back_result"> 
                </div>  
			</div>

			<div id="Div2">
				<div>
					<h1 class="h1"><a href="http://localhost/perfumer/">Perfumer</a></h1>
				</div>
			</div>

			<div id="Div3">
				<div>
				<?php 
					if(isset($_SESSION["email"]))
						echo '<p style="color: white;"> Bună, ' . $_SESSION['email'] .
							" <form method='post'  >
							<input type='submit' name='logout' value='Logout'>  
							</form> </p>
							";
					else
						echo '<p style="color: white;"> Încă nu ești logat!'."
							<form method='post'  >
							<input type='submit' name='login' value='Login'>  
							</form></p>";


					if(isset($_POST['login'])){
						header("location:http://localhost/perfumer/login");	
					}

					if(isset($_POST['logout'])){
						session_unset();
						session_destroy();

						header("location:http://localhost/perfumer/");
						exit();
					}
				 ?> 

				</div>
			</div>

		</div>

	</header>

	<nav>
		<ul>
			<li class="FemeiBarbati"><a href='http://localhost/perfumer/parfumurifemei'>PARFUMURI FEMEI</a></li>
			<li class="FemeiBarbati"><a href='http://localhost/perfumer/parfumuribarbati'>PARFUMURI BĂRBAȚI</a></li>
			<li class="FemeiBarbati"><a href='http://localhost/perfumer/noutati'>NOUTĂȚI</a></li>
		</ul>

		<ul>
			
			<li class="ContCos"><a id="contBtn" >CONT <i class="fa fa-user-circle" ></i></a></li>
			<li class="ContCos"><a id="cosBtn" >COȘ <i class="fa fa-shopping-cart"></i></a></li>
			<li class="ContCos"><a id="wishlistBtn">WISHLIST <i class="fa fa-heart"></i></a></li>
		</ul>
	</nav>
	
	<div class="bg-modal">
				<div class="modal-contents">
			
					<div class="close">+</div>
			
					<form action="">
						<a href="login" id="button-model">Intr&#259; &#238;n cont </a>
					</form>
			
				</div>
			</div>



			<?php 
        if(!isset($_SESSION["email"])){
						echo "
						<script type=\"text/javascript\">
						
						 document.getElementById('cosBtn').addEventListener(\"click\", function() {
							document.querySelector('.bg-modal').style.display = \"block\";
							});
							document.querySelector('.close').addEventListener(\"click\", function() {
							document.querySelector('.bg-modal').style.display = \"none\";
							});	
							document.getElementById('wishlistBtn').addEventListener(\"click\", function() {
								document.querySelector('.bg-modal').style.display = \"block\";
								});
								document.querySelector('.close').addEventListener(\"click\", function() {
								document.querySelector('.bg-modal').style.display = \"none\";
								});	
								document.getElementById('contBtn').addEventListener(\"click\", function() {
									location.replace('http://localhost/perfumer/login');
									});
				 </script>
						   
						";
				   }

			else{
				echo "
				<script type=\"text/javascript\">
				document.getElementById('cosBtn').addEventListener(\"click\", function() {
	                  location.replace('http://localhost/perfumer/ShoppingCart');
				  });	
				  
				  document.getElementById('wishlistBtn').addEventListener(\"click\", function() {
					location.replace('http://localhost/perfumer/MyAccount');
					});
					document.getElementById('contBtn').addEventListener(\"click\", function() {
						location.replace('http://localhost/perfumer/MyAccount');
						});
				</script>
				";
			}


		?>