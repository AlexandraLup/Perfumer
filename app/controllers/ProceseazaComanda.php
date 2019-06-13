<?php

class ProceseazaComanda extends Controller {
	
	function index(){
        $userID= $_SESSION['id'];
		$model=$this->loadModel('ProceseazaComandaModel');
		$template = $this->loadView('proceseazacomanda-view');
        $userDetails = $model ->getPersonalData($userID);
        $basketDetails = $model ->getBasket($userID);
        $valoare = 0;
        foreach($basketDetails as $product){
            $valoare = $valoare + intval($product['subtotal']);
        }
      
        $template->set('cos', $basketDetails);
        $template->set('valoare', $valoare);
        $template->set('user', $userDetails);
 
        if(isset($_POST['proceseaza'])){

            $random = rand(1,1000) . rand(100,10000);
            $model->proceseazacomanda($userID,$valoare,$random);
            foreach($basketDetails as $product){
                $cantitate=$product['cantitate'];
                $stoc= 'stoc_' . $product['ml'];
                $subtotal =$product['subtotal'];
                $idProdus = $product['id_produs'];
                $model->addProduct($random,$idProdus,$subtotal, $cantitate,$product['ml']);
                $model->updateStock($idProdus,$cantitate);
            }
          $model->deleteBasket($userID);
           $this->redirect('comandaprocesata');
        }
	    $template->render();



    }
}


?>