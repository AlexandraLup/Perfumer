
<!DOCTYPE html>
<html lang="RO">

<head>
   <meta charset="UTF-8">
  <title>Perfumer</title>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styles.css"   type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>
  <header>
      <div id="Div2">
        <div>
        <h1 class="h1" style="padding-left:90%">Perfumer</a></h1>
      </div>
    </div>
    </header>
    <div class="navbar">
  <a class="active" href="#"><i class="fas fa-file"></i> Rapoarte</a> 
  <a href="add"><i class="fas fa-plus"></i> Adaug&#259; produs</a> 
  <a href="delete"><i class="fas fa-trash-alt"></i>     &#350;terge produs</a> 
</div>
<section>


<div class="containerAdmin" >  
    <div class="navbar">
    <a  class="active" href="#"> Stocuri</a> 
    <a href="rapoarteVanzari" style="color:black;"> Vanzari</a>  
  </div>      
      
     <div class="categorie">
      <form method="post" action=""> 
        <div class="textRaport">
          <input type="text" name="categorie" placeholder ="Introdu categoria..." required /> 
        </div>
        <div class="afiseazaRaport">
               <button style="color: white; "class="ButonRaport" type="submit" value="afiseaza" name="afiseaza">Afiseaza</button>
            </div>  
        </form> 
     </div>
     <br>


    <?php 
    if(isset($CategorieSet))
    {
      $output = '';
      $output = '  

      <div class="bodyRaport">
      <div style="height:40px;">
      <form method="post" action=""> 
        
        <div class="format">
               <button style="color: white; "class="ButonRaport" type="submit" value="csv" name="csv" >CSV</button>
            </div> 
            <div class="format">
               <button style="color: white; "class="ButonRaport" type="submit" value="pdf" name="pdf">PDF</button>
            </div>
             
        </form> 
      </div>
    
        <div class="listaRaport">
          <table style="width:100%;">  
                          <tr>  
                               <th width="8%">ID</th>  
                               <th width="25%">Name</th>  
                               <th width="25%">Esenta</th>  
                               <th width="14%">Stoc 30</th>  
                               <th width="14%">Stoc 50</th>  
                               <th width="14%">Stoc 100</th>  
                          </tr>  ';
        echo $output;
        $output = '';
        if($totalRaport[0] > 0)
        { 
          for ($i=0; $i<$totalRaport[0];$i++) 
          {
            $output .= '
            <tr>  
                 <th width="8%">'.$CategorieSet[$i]['id'].' </th>  
                 <th width="25%">'.$CategorieSet[$i]['nume'].'</th>  
                 <th width="25%">'.$CategorieSet[$i]['esenta'].'</th>  
                 <th width="14%">'.$CategorieSet[$i]['stoc_30'].' </th>  
                 <th width="14%">'.$CategorieSet[$i]['stoc_50'].' </th>  
                 <th width="14%">'.$CategorieSet[$i]['stoc_100'].'</th>  
            </tr> ';
          }

          
        }

        $output.= '
        </table>  
        </div>
        </div>';
       echo $output;
        
    }


?>



</div>  


</section>
</body>
</html>
