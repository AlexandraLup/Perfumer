<?php
include APP_DIR . 'models/MyAccountModel.php';
class MyAccount extends Controller {
	
	function index()
	{
	   	$model= new MyAccountModel();
		$template = $this->loadView('myAccount-view');

		if(isset($_SESSION["id"])){
			$info = $model->getDetailsWish($_SESSION["id"]);
			$info2= $model->getRowWish($_SESSION["id"]);
			$count= (int)$info2[0];

			$template->set('produsWish', $info);
			$template->set('rowWish', $count);

		}else{
			$count= 0;
			$template->set('rowWish', $count);
		}

		$template->render();
	}

	function settings(){
		
		$template = $this->loadView('personaldata-view');
		$model=$this->loadModel('MyAccountModel');
		$array=$model->getId($_SESSION['email']);
		$userID = $array['id'];
		$userDetails = $model->getPersonalData($userID);
	    $template->set('details',$userDetails);
		$template->render();
	}
}
?>