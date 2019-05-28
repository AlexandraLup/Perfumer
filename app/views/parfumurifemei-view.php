<?php include 'header.php'; ?>

<section>

<div style="background-color: white; height: 1000px">
  <div class="columnPF parfumuriLeft">
      <div class="filtreParfum"> Filtru </div>
      <div class="filtru"> <a href="crescator.html"> Preț  crescator </a></div>
      <div class="filtru"> <a href="#"> Preț descrescator </a></div>
      <div class="filtru"> <a href="#"> Cele mai noi </a></div>
      <div class="filtru"> <a href="#"> Cele mai vândute </a></div>

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
<?php include 'footer.php'; ?>