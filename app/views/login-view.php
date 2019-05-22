<?php include  'header.php'; ?>
<section>
<div class="main">

  <div class="title">
    <h2> AutentificÃ„Æ’-te sau creeazÃ„Æ’ cont </h2>
  </div>

  <div class="row1">
    <div class="column-left">
      <h4> SUNT DEJA CLIENT </h4>
      <form class="login" action="index.html">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter E-mail" id="email" required>
        <label for="psw"><b>ParolÃ„Æ’</b></label>
        <input type="password" placeholder="Enter Password"  id="psw" required>
        <button type="submit">Login</button>
        <span class="psw"> <a href="#">ÃˆÅ¡i-ai uitat parola?</a></span>
        <br>
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
        <p> Vezi lista de preferinÃˆâ€ºe</p>
        <p> PrimeÃˆâ„¢ti prin poÃˆâ„¢tÃ„Æ’ ultimele noutÃ„Æ’Ãˆâ€ºi despre tendinÃˆâ€ºe Ãˆâ„¢i </p>
        <p> promoÃˆâ€ºii</p>
        <br>
      </div >
      <div class="box1" >
        <button onclick="window.location.href = 'inregistrare.html';"> ÃƒÅ½nregistreazÃ„Æ’-te </button>
      </div>
    </div>

  </div>

</div>

</section>
<?php include  'footer.php'; ?>