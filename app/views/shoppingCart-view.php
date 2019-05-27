<?php 
include "header.php";

?>

    
<section >
<h2 class="title"> COȘ DE CUMPĂRĂTURI </h2>
<div id="box2">
<div class="bascket">
  <div class="bascket-tags">
    <ul style="list-style-type:none;">
      <li >Produs</li>
      <li>Preț</li>
      <li>Cantitate</li>
      <li >Subtotal</li>
      </ul>
    </div>


  <div class="bascket-products">
    <div class="item">
      <div class="product-image">
        <img src="./images/gguilty.png" style="width:120px;height:140px;" alt="Placeholder image 2" class="product-frame">
        </div>
        <div class="product-details">
          <p><strong>GUCCI GUILTY APA DE TOALETA 75 ML</strong></p>
          </div>
    </div>
  <div class="price">270</div>
  <div class="quantity">
    <input type="number" value="1" min="1" class="quantity-field">

  </div>
  <div class="subtotal">270</div>
  <div class="remove">
         <button>Remove</button>
       </div>

	</div>
    <div class="bascket-products">
      <div class="item">
        <div class="product-image">
          <img src="./images/gguilty.png" style="width:120px;height:140px;" alt="Placeholder image 2" class="product-frame">
          </div>
          <div class="product-details">
            <p><strong>GUCCI GUILTY APA DE TOALETA 75 ML</strong></p>
            </div>
      </div>
    <div class="price">270</div>
    <div class="quantity">
      <input type="number" value="1" min="1" class="quantity-field">

    </div>

    <div class="subtotal">270</div>
    <div class="remove">
           <button>Remove</button>
         </div>
      </div>
  </div>
  <aside>
        <div class="summary">
          <h4>Sumar comandă</h4>
          <div class="summary-subtotal">
            <div class="subtotal-title">Subtotal</div>
            <div class="subtotal-value final-value" id="basket-subtotal">270 LEI</div>
              </div>
            <div class="summary-promo hide">
              <div class="promo-title">Reducere</div>
              <div class="promo-value final-value" >34 LEI</div>
            </div>
            <div class="box3">
           <div class="livrare">Livrare</div>
           <div class="livrate-value final-value"> Gratuită</div>
           </div>
          <div class="summary-total">
            <div class="total-title">Total</div>
            <div class="total-value final-value" id="basket-total">270 LEI</div>
          </div>
          <form action="finalizareComanda.html">
          <div class="summary-checkout">
           	<button class="checkout-cta">Procesează comanda</button>
          </div>
          </form>
        </div>
      </aside>
</div>
</section>

<?php  include 'footer.php'   ?>
