<?php
include APP_DIR . 'models/ProdusModel.php';
$produs = new ProdusModel();
$array = $produs->searchProduct($_POST['name']);
foreach($array as $key) {
?>

<div id="produs"> <img src=" <?php echo $key['imagine'];  ?>"  id="pic" /> $nbsp; <span> <?php  echo $key['nume'];?></span></div>

<?php

}

?>