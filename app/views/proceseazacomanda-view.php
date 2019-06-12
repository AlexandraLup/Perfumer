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

	<header >
	<div id="Div" >
			<div id="Div-header">
			   <a style="color:white; width:100%;" href="shoppingcart"> Inapoi la cosul de cumparaturi </a>
			</div>

			<div id="Div2">
				<div>
					<h1 class="h1"><a href="http://localhost/perfumer/">Perfumer</a></h1>
				</div>
			</div>
    </div>
    </header>
<section>

<div class="comanda" >

<div class="row-comanda">

<div class="livrare">
<h5><b> LIVRARE</b> </h4>
<br>
<h6> Tip de livrare </h6>
<p> Livrare standard(2-4 zile, 15 LEI) </p>
<h5> ADRESĂ DE LIVRARE </h5>
<p>  <?php echo  $user['adresa'] . ', ' . $user['cod_postal']  . ', ' . $user['oras'] . ', ' . $user['judet'] ;?></p>
<h5> Număr de telefon pentru actualizări privind livrarea </h5>
<p>  <?php echo  $user['telefon'] ; ?></p>
</div>

<div class="plati">
<h5><b> PLĂȚI </b></h4>
<br>
<h6> Metodă de plată</h6>
<p>Plată La Livrare </p>
</div>

</div>
<div class="total-comanda">
   <h4><b>COMANDA DVS.</b> </h4>
      <table class="total-com" >
        <tr>
          <th> Valoare <th>
          <td> <?php echo $valoare . ' LEI'; ?> </td>
      </tr>

      <tr>
          <th> Livrare(Fan Courier) <th>
          <td> 15 LEI </td>
      </tr>

      <tr>
          <th>Total <th>
          <td> <?php echo( $valoare + 16) . ' LEI' ; ?> </td>
      </tr>
     
</table>
<form method="post" action="#">
       <button type="submit" name="proceseaza" class="button-model"> Proceseaza comanda </button>
</form>
</div>

</div>



</section>


</body>

</html>
