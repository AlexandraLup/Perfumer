<?php

class Order extends Controller {
	
	function index(){}



public function search($orderID){

        $userID= $_SESSION['id'];
		$model=$this->loadModel('OrderModel');
		$template = $this->loadView('order-view');

		$proVars = str_replace('%20',' ',$orderID);
		$info = $model->getOrder($userID,$proVars);
		$infouser = $model->getPersonalData($userID);
		$infoproduct = $model->getOrderProducts($orderID);
		$template->set('order', $info);
		$template->set('user', $infouser);
		$template->set('products', $infoproduct);
	    $template->render();
	

}
}


?>