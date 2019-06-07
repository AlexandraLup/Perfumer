<?php include  'header.php'; ?>




<section>

<div class="form-style-10">
<h2>Noul tău cont!</h2>
<form action="" method="POST">
    <div class="section2"><span>1</span>Nume & Adresă</div>
    <div class="inner-wrap">
        <label>Nume <input type="text" name="nume" required></label>
        <label>Prenume <input type="text" name="prenume" required></label>
        <label>Adresă <textarea name="adresa" required></textarea></label>
        <label> Sex
          <select id="county" name="sex">
          <option value="feminin">Femeie</option>
          <option value="masculin">Bărbat</option>
          </select>
        </label>
    </div>

    <div class="section2"><span>2</span>Email & Telefon</div>
    <div class="inner-wrap">
        <label>Adresă Email 
            <?php
                if(isset($emailNevalid))
                    echo '<p style="color:red;"> Acest email exista deja! </p>'

            ?>
            <input type="email" name="email" required>
        </label>
        <label>Număr telefon <input type="text" name="telefon">
        	<span> *Numărul de telefon este o informație importantă, mai ales pentru firma de curierat.</span>
        </label>

    </div>

    <div class="section2"><span>3</span>Parolă</div>
        <div class="inner-wrap">
        <label>Parolă <input type="password" name="pass1" required></label>
        <label>Confirmă Parola
             <?php
                if(isset($parolaNeconfirmata))
                    echo '<p style="color:red;"> Parola gresita! </p>'

            ?>
            <input type="password" name="pass2" required>
        </label>
    	</div>
		
	<div class="section2"><span>4</span>Preferințe</div>
         
        <div class="inner-wrap">
        <label> Preferință 1
          <select id="county" name="preferinta1">
          <option value="florale">Florale</option>
          <option value="fructate">Fructate</option>
          <option value="verzi">Verzi</option>
          <option value="marine">Marine</option>
          <option value="citrice">Citrice</option>
          <option value="orientale-dulci">Orientale-dulci</option>
          <option value="orientale-lemnoase">Orientale-lemnoase</option>
          <option value="muschi">Muschi</option>
            </select>
        </label>

         <label> Preferință 2
          <select id="county" name="preferinta2">
           <option value="florale">Florale</option>
          <option value="fructate">Fructate</option>
          <option value="verzi">Verzi</option>
          <option value="marine">Marine</option>
          <option value="citrice">Citrice</option>
          <option value="orientale-dulci">Orientale-dulci</option>
          <option value="orientale-lemnoase">Orientale-lemnoase</option>
          <option value="muschi">Muschi</option>
            </select>
        </label>

        </div>

    <div class="button-section2">
        <input type="submit" name="Sign Up" value="Înregistrare">
	   
    </div>
</form>
</div>

</section>

<?php include  'footer.php'; ?>


