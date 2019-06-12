<?php
class ShoppingCart extends Controller {
	
	function index()
	{
	    
		$template = $this->loadView('shoppingCart-view');
		$model = $this->loadModel('ShoppingCartModel');
		$userID = $_SESSION['id'];
		$result = $model->getBasket($userID);
		if(empty($result)){
		    $template->set('empty', true);
		}
		foreach($result as $produs){
			$productID = $produs['id_produs'];
			$ml = $produs['ml'];
			$cantitate = $produs['cantitate'];
			if($model->verifyStock($productID, $ml)< $cantitate){
				$model->deleteProduct($productID,$userID,$ml);
			}
		}
		$result = $model->getBasket($userID);
		if(isset($_POST['qty'])){
			$cantitate = $_POST['qty'];
			$productID = $_POST['produs'];
			$productML = $_POST['ml'];
			if($model->verifyStock($productID,$ml)<$cantitate){
			   $template->set('success', false);
		}else{
			$model->updateQTY($userID,$productID, $cantitate,$productML);
			$result = $model->getBasket($userID);
			
		}
	} 

	    if(isset($_POST['delete'])){

			$productID = $_POST['id'];
			$productML= $_POST['ml'];
			var_dump($productID);
			var_dump($productML);
			$result= $model->deleteProduct($productID,$userID,$ml);
			$result = $model->getBasket($userID);
		   
		}
		$template->set('basket', $result);
		
		$template->render();
	}
}
?>