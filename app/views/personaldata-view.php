<?php include 'header.php'; ?>

<section>
<div class="menu">
    <div class="lista">
    <a href="http://localhost/perfumer/MyAccount"><i class="far fa-heart"></i> Produse favorite</a>
    </div>
    <div class="lista">
    <a href="#"><i class="far fa-clipboard"></i> Date personale</a>
    </div>
    <div class="lista">
    <a href="comenzi"><i class="fas fa-warehouse"></i> Istoricul comenzilor</a>
    </div>
</div>
   <div class="personal-data">
    <p class="field-title"> <strong>E-mail </strong></p>
     <p><?php echo $details['email']; ?></p>
     <p class="field-title"> <strong>Nume</strong></p>
     <p><?php echo $details['nume']; ?></p>
     <p class="field-title"> <strong>Prenume</strong></p>
     <p><?php echo $details['prenume']; ?></p>
     <p class="field-title"> <strong>Num&#259;r de telefon</strong></p>
     <p><?php echo $details['telefon']; ?></p>
     <p class="field-title"> <strong>Sex</strong></p>
     <p><?php echo $details['sex']; ?></p>
      <p class="field-title"> <strong>Adres&#259; </strong></p>
      <p><?php echo $details['adresa']; ?></p>
      <p class="field-title"> <strong>Oraș</strong></p>
      <p><?php echo $details['oras']; ?></p>
      <p class="field-title"> <strong>Județ</strong></p>
      <p><?php echo $details['judet']; ?></p>
      <p class="field-title"> <strong>Cod poștal</strong></p>
      <p><?php echo $details['cod_postal']; ?></p>
     </div>
     <div class="edit">
     <a  href="http://localhost/perfumer/MyAccount/edit" class="button-model" > Editeaz&#259;  </a>
</div>
</section>


<?php include 'footer.php'; ?>