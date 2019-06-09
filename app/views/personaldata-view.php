<?php include 'header.php'; ?>

<section>
<div class="menu">
    <div class="lista">
    <a href="myaccount.html"><i class="far fa-heart"></i> Produse favorite</a>
    </div>
    <div class="lista">
    <a href="personaldata.html"><i class="far fa-clipboard"></i> Date personale</a>
    </div>
    <div class="lista">
    <a href="orderhistory.html"><i class="fas fa-warehouse"></i> Istoricul comenzilor</a>
    </div>
</div>
   <div class="personal-data">
    <p class="field-title"> <strong>E-mail </strong></p>
     <p><?php echo $details['email']; ?></p>
     <p class="field-title"> <strong>Nume</strong></p>
     <p><?php echo $details['nume']; ?></p>
     <p class="field-title"> <strong>Prenume</strong></p>
     <p><?php echo $details['prenume']; ?></p>
     <p class="field-title"> <strong>Numar de telefon</strong></p>
     <p><?php echo $details['telefon']; ?></p>
     <p class="field-title"> <strong>Sex</strong></p>
     <p><?php echo $details['sex']; ?></p>
    </div>
    <div class="adresa">
    <h3>Adresă</h3>
    </div>
    <div class="personal-data1">
      <p class="field-title"> <strong>Nume</strong></p>
      <p><?php echo $details['nume']; ?></p>
      <p class="field-title"> <strong>Prenume</strong></p>
      <p><?php echo $details['prenume']; ?></p>
      <p class="field-title"> <strong>Adresă</strong></p>
      <p><?php echo $details['adresa']; ?></p>
      <p class="field-title"> <strong>Oraș</strong></p>
      <p>Iași</p>
      <p class="field-title"> <strong>Județ</strong></p>
      <p>Iași</p>
      <p class="field-title"> <strong>Cod poștal</strong></p>
      <p>70001</p>
     </div>
</section>


<?php include 'footer.php'; ?>