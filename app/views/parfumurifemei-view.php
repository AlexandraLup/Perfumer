<?php include 'header.php'; ?>

<section>

<div style="background-color: white;  overflow:hidden;">
  <div class="columnPF parfumuriLeft">
      <div class="filtreParfum"> Filtru </div>
         <div class="filtru"> <a href="#"> Preț crescator </a></div>
      <div class="filtru"> <a href="#"> Preț descrescator </a></div>
      <div class="filtru"> <a href="#"> Cele mai noi </a></div>
      <div class="filtru"> <a href="#"> Cele mai vândute </a></div>

         <div class="wrapper">
    <fieldset class="filter-price">
    
    <div class="price-field">
    <input type="range" min="0" max="5000" value="0" id="lower">
    <input type="range" min="0" max="5000" value="5000" id="upper">
    </div>
  
    <div class="price-wrap">
      
      <div class="price-container">
        <div class="price-wrap-1">
          <label for="one">$</label>
          <input id="one">
        </div>
        <div class="price-wrap_line">-</div>
        <div class="price-wrap-2">
          <label for="two">$</label>
          <input id="two">
        </div>
      </div>
    </div>
  
      </fieldset>
    </div>
  </div>



  <div class="columnPF parfumuriRight"> 
    <div class="titluPF"> Parfumuri femei</div>
    <div>  <h2> Bara pagini </h2></div>
        <div id="topNoutatiFoto">

            

    <?php  

  $output = '';
  if($total_row > 0)
  { 
    for ($i=0; $i<$total_row;$i++) 
    { 
      $output .= '
      <div class="fotoNoutati">
      <div class="col-sm-4 col-lg-3 col-md-3">
        <div class="btnn-1">
          <img src="'. $produs[$i]['imagine'] .'" alt="" class="img-responsive" >
          <p align="center"><strong><a href="#">'. $produs[$i]['nume'] .'</a></strong></p>
          <h4 style="text-align:center;" class="text-danger" >'. $produs[$i]['pret'] .' RON'.'</h4>
           </div>
        </div>

      </div>
      ';
    }
  }
  else
  {
    $output = '<h3>No Data Found</h3>';
  }
  echo $output;
  
    ?>

            </div>
          
            

       
 
  </div>
</div>


</section>

<script>
$(document).ready(function(){

    filter_data();

    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#lower').val();
        var maximum_price = $('#upper').val();
      
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }

    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    }

    $('.common_selector').click(function(){
        filter_data();
    });

    $('#price_range').slider({
        range:true,
        min:1,
        max:5000,
        values:[1, 5000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });

});
</script>



<?php include 'footer.php'; ?>