<?php include 'header.php'; ?>

<section>

<div style="background-color: white;  overflow:hidden;">
  <div class="columnPF parfumuriLeft">
      <div class="filtreParfum"> Filtru </div>
      <form action="" method="POST">
          <label class="containerParf">Pret crescator
        <input type="radio"  name="radio" value="asc">
        <span class="checkmarkParf"></span>
        </label>

        <label class="containerParf">Pret descrescator
        <input type="radio" name="radio" value="desc">
        <span class="checkmarkParf"></span>
        </label>

        <button style="color: white; "class="containerParfButon" type="submit" value="filtreaza" name="filtru">Filtreaza</button>
        </form><br>

        <form action="" method="POST">
          <label class="containerParf">Cele mai noi
        <input type="radio"  name="radio" value="celeMaiNoi">
        <span class="checkmarkParf"></span>
        </label>

        <label class="containerParf">Cele mai vandute
        <input type="radio" name="radio" value="celeMaiVandute">
        <span class="checkmarkParf"></span>
        </label>

        <button style="color: white; "class="containerParfButon" type="submit" value="filtreaza" name="filtru2">Filtreaza</button>
        </form>
  </div>



  <div class="columnPF parfumuriRight"> 
    <div class="titluPF"> Parfumuri bărbați</div>
   
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
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsAsc[$i]['nume']. ' " >'. $produsAsc[$i]['nume'] .'</a></strong></p>
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
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsDesc[$i]['nume']. ' " >'. $produsDesc[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsDesc[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else { $output = '<h3>No Data Found</h3>';}

    }else if(isset($produseNoi)){
        $output = '';
        if($total_row > 0){ 
          for ($i=0; $i<$total_row;$i++) { 
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produseNoi[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produseNoi[$i]['nume']. ' " >'. $produseNoi[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produseNoi[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else { $output = '<h3>No Data Found</h3>';}

    } else if(isset($produsVandut)){

        $output = '';
        if($total_rowVandut > 0){ 
          for ($i=0; $i<$total_rowVandut;$i++) { 

            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produsVandut[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produsVandut[$i]['nume']. ' " >'. $produsVandut[$i]['nume'] .'</a></strong></p>
                <p style="text-align:center;" class="text-danger" >'.'<strong>De la '. $produsVandut[$i]['pret_30'] .' RON</strong>'.'</h4>
                 </div>
              </div>
            </div>';
          }
        }
        else { $output = '<h3>No Data Found</h3>';}

    }else{
      
        $output = '';
        if($total_row > 0) {
         for ($i=0; $i<$total_row;$i++) { 
            $output .= '
            <div class="fotoNoutati">
            <div class="col-sm-4 col-lg-3 col-md-3">
              <div class="btnn-1">
                <img src="'. $produs[$i]['imagine'] .'" alt="" class="img-responsive" >
                <p align="center"><strong><a href="http://localhost/perfumer/produs/search/'.$produs[$i]['nume']. ' " >'. $produs[$i]['nume'] .'</a></strong></p>
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