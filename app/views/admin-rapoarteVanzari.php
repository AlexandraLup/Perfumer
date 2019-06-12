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
  <a class="active" href="#"><i class="fas fa-file"></i> Rapoarte</a> 
  <a href="add"><i class="fas fa-plus"></i> Adaug&#259; produs</a> 
  <a href="delete"><i class="fas fa-trash-alt"></i> 		&#350;terge produs</a> 
</div>
<section>


<div class="containerAdmin" >  
    <div class="navbar">
	  <a  href="rapoarteStocuri" style="color:black;"> Stocuri</a> 
	  <a class="active" href="#"> Vanzari</a>  
	</div>      
      
     <div class="categorie">
     	<form method="post" action=""> 
     		<div class="textRaport">
     			<input type="text" name="categorie" placeholder ="Introdu categoria..." required />
     		</div>
     		<div class="afiseazaRaport">
           	 	 <button style="color: white; "class="ButonRaport" type="submit" value="afiseaza" name="afiseaza">Afiseaza</button>
            </div>  
        </form> 
     </div>
     <br>


<?php

if(isset($categorieSetata)){
     echo '<div class="bodyRaport">
     	<div style="height:40px;">
     	<form method="post" action=""> 
     		
     		<div class="format">
           	 	 <button style="color: white; "class="ButonRaport" type="submit" value="afiseaza" name="afiseaza">CSV</button>
            </div> 
            <div class="format">
           	 	 <button style="color: white; "class="ButonRaport" type="submit" value="afiseaza" name="afiseaza">PDF</button>
            </div>
            <div class="format">
           	 	 <button style="color: white; "class="ButonRaport" type="submit" value="afiseaza" name="afiseaza">HTML</button>
            </div> 
        </form> 
    	</div>
		
        <div class="listaRaport">
        	<table class="table table-bordered">  
                          <tr>  
                               <th width="5%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="35%">Address</th>  
                               <th width="10%">Gender</th>  
                               <th width="20%">Designation</th>  
                               <th width="5%">Age</th>  
                          </tr> 
                        

                     
            </table>  
        </div>
    </div>';
  }
    ?>
</div>  


</section>
</body>
</html> 