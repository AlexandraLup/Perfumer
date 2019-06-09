<?php include 'header.php'; ?>

<section>

<div style="background-color: white;  overflow:hidden;">
  <div class="columnPF parfumuriLeft">
      <div class="filtreParfum"> Filtru </div>

        <form action="" method="POST">
          <label class="containerParf">Pret crescator
        <input type="radio"  name="radio">
        <span class="checkmarkParf"></span>
        </label>

        <label class="containerParf">Pret descrescator
        <input type="radio" name="radio">
        <span class="checkmarkParf"></span>
        </label>

        <button style="color: white; "class="containerParfButon" type="submit" value="filtreaza" name="filtreaza">Filtreaza</button>
        </form>
      
      <div class="filtru"> <a href="#"> Cele mai noi </a></div>
      <div class="filtru"> <a href="#"> Cele mai vândute </a></div>


  </div>



  <div class="columnPF parfumuriRight"> 
    <div class="titluPF"> Parfumuri femei</div>
    <div>  <h2> Bara pagini </h2></div>
        <div id="topNoutatiFoto">

            

    <?php  
    if(isset($produsAsc))
    {
        $output = '';
        if($total_row > 0)
        { 
          for ($i=0; $i<$total_row;$i++) 
          {
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produsAsc[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="#">'. $produsAsc[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsAsc[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div> ';
          }
        }
        else { $output = '<h3>No Data Found</h3>';}

    }else if(isset($produsDesc)){
        $output = '';
        if($total_row > 0){ 
          for ($i=0; $i<$total_row;$i++) { 
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produsDesc[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="#">'. $produsDesc[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsDesc[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else { $output = '<h3>No Data Found</h3>';}

    } else{
        $output = '';
        if($total_row > 0) {
         for ($i=0; $i<$total_row;$i++) { 
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produs[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="#">'. $produs[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produs[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else{ $output = '<h3>No Data Found</h3>'; }
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