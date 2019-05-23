<?php include  'header.php'; ?>
<section>
<div class="main">

  <div class="title">
    <h2> Autentifică-te sau creează cont </h2>
  </div>

  <div class="row1">
    <div class="column-left">
      <h4> SUNT DEJA CLIENT </h4>
      <form class="login" action="" method="POST">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter E-mail" id="email" name="email" required>
        <label for="psw"><b>Parolă</b></label>
         <?php 
            if(isset($parolaGresita))
              echo '<p style="color:red;"> Ați greșit parola! </p>'
        ?>
        <input type="password" placeholder="Enter Password"  id="psw" name="psw" required>
        <button type="submit">Login</button>
        <span class="psw"> <a href="#">Ti-ai uitat parola?</a></span>
        <br>
        <?php 
            if(isset($login))
              echo '<p style="color:red;"> Înregistrează-te mai întâi! </p>'
        ?>
        <label> 
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
      </form>
    </div>

    <div class="column-right">
      <h4> CLIENT NOU </h4>
      <div class="box">
        <h5> Benefiicile clientului </h5>
        <p> Istoricul comenzilor</p>
        <p> Vezi lista de preferințe</p>
        <p> Primești prin poștă ultimele noutăți despre tendințe și </p>
        <p> promoții</p>
        <br>
      </div >
      <div class="box1" >
        <button onclick="window.location.href = 'register';"> Înregistrează-te </button>
      </div>
    </div>

  </div>

</div>

</section>
<?php include  'footer.php'; ?>