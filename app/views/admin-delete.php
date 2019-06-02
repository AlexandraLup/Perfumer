<!DOCTYPE html>
<html lang="RO">

<head>
	 <meta charset="UTF-8">
	<title>Perfumer</title>
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styles.css"   type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>


<body>
	<header>
	    <div id="Div2">
		    <div>
				<h1 class="h1" style="padding-left:90%">Perfumer</a></h1>
			</div>
		</div>
    </header>
    <div class="navbar">
  <a \href="rapoarte"><i class="fas fa-file"></i> Rapoarte</a> 
  <a href="add"><i class="fas fa-plus"></i> Adaug&#259; produs</a> 
  <a class="active" href="#"><i class="fas fa-trash-alt"></i>&#350;terge produs</a> 
</div>
<section>
    <div class="delete-container">
    <?php
           if (isset($success)){
          if($success==true) {
              echo '<div style="background:rgb(19, 122, 19); padding: 10px; border-radius : 7px; margin : 5px;" >  <p style="color: white ">  Produsul a fost sters! </p> </div>';
          }else{
            echo '<div style="background:red; padding: 10px; border-radius : 7px; margin : 5px;" >  <p style="color: white ">  Produsul nu a fost sters! </p> </div>';
          }
        
        }
         ?>
        <!-- Create Form -->
        <div class="produs-container">
            <div class="title-produs">
                <strong><i class="fas fa-trash-alt"></i> 	&#350;terge produs </strong>
            </div>
            <div class="form-produs">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="cod">Cod produs</label>
                            <input type="text"  id="cod" name="cod" placeholder="Cod" required>
                        </div>
                    </div>  
                   <button type="submit"  name="delete" class="success"><i class="fa fa-check-circle"></i> &#350;terge</button>
                </form>
            </div>
        </div>
        <!-- End create form -->
        <br>
    </div><!-- /.container -->
</section>
</body>
</html>