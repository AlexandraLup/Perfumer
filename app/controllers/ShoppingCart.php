<?php
class ShoppingCart extends Controller {
	
	function index()
	{
	
		$template = $this->loadView('shoppingCart-view');
		$model = $this->loadModel('ShoppingCartModel');
		$userID = $_SESSION['id'];
		$result = $model->getBasket($userID);
		$template->set('basket', $result);
		if(isset($_POST['qty'])){
			echo $_POST['qty'];
		}
		$template->render();
	}
}
?>