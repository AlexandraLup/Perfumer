<?php include 'header.php'; ?>
<section>
<div class=produs>
    <img src="<?php echo BASE_URL . $produs["imagine"]?>" style="width:23%; height:23%;">
    <div class="all">
      <div class="titlu-produs">
       <?php echo (strtoupper($produs["nume"]). ' ' . strtoupper($produs["categorie"])); ?>
      </div>
	  	<table class="table-produs" >
        <tr>
          <th>Cantitate</th>
          <th>Disponibilitate</th> 
          <th>Pret</th>
				</tr>	   
        <tr>
					<td>
					  <label class="radio_button"> 30 ml
              <input type="radio" name="quantity", value="30">
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
					  <label class="radio_button"> 50 ml
              <input type="radio" name="quantity", value="50">
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
					  <label class="radio_button"> 100 ml
              <input type="radio" name="quantity", value="100">
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