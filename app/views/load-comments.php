<?php
include APP_DIR . 'models/ProdusModel.php';
$produs = new ProdusModel();
$result = $model -> getAllComments('candy prada');
foreach($result as $array) {
    echo '<p>' . $array['nume_utilizator'] . '</p>';
    echo '<p>' . $array['comentariu'] . '</p>';
}

?>