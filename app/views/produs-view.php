<?php include 'header.php'; ?>
<section>
<div class=produs>
    <img src="<?php echo BASE_URL . $produs["imagine"]?>" style="width:23%; height:23%;">
    <div class="all">
      <div class="titlu-produs">
       <?php echo (strtoupper($produs["nume"]). ' ' . strtoupper($produs["categorie"])); ?>
      </div>
    <div class="detalii-produs">
	  	<table style="width:100%">
        <tr>
          <th>Cantitate</th>
          <th>Disponibilitate</th> 
          <th>Pret</th>
        </tr>
        <tr>
          <td> 
					  <form method="post" action="#">
					    <select name="variante" id="variante">
								<option value=""></option>
                <option value="30 ml">30 ml</option>
                <option value="50 ml">50 ml</option>
                <option value="100 ml">100 ml</option>
						  </select>
            </form>
          </td>              
						<?php 
						   if(isset($_POST["variante"])){
									$varianta=$_POST["variante"];
									echo $varianta;
									switch($variante) {
                      case '30 ml' : if($produs["stoc_30"]>0) {
												echo '<td> <style="color:green"> In stoc </td>';
											}
											else{
												echo '<td> <style="color:red"> Stoc insuficient </td>';
											}
											echo '<td>' . $produs["pret_30"] . '</td>';  
											break;
											case '50 ml' : if($produs["stoc_50"]>0) {
												echo '<td> <style="color:green"> In stoc </td>';
											}
											else{
												echo '<td> <style="color:red"> Stoc insuficient </td>';
											}
											echo '<td>' . $produs["pret_50"] . '</td>';  
											break;
											case '30 ml' : if($produs["stoc_100"]>0) {
												echo '<td> <style="color:green"> In stoc </td>';
											}
											else{
												echo '<td> <style="color:red"> Stoc insuficient </td>';
											}
											echo '<td>' . $produs["pret_100"] . '</td>';  
											break;
									}
									
							 }
						?>
        </tr>
      </table>
    </div>
		<div class="buttons">
		<button><i class="far fa-heart"></i> Adauga in wishlist</button>
		<button><i class="fa fa-shopping-cart"></i> Adauga in cos</button>
	</div>
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
  </section>

	<?php include 'footer.php'; ?>