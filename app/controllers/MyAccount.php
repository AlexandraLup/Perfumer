<?php
class MyAccount extends Controller {
	
	function index()
	{
	   
		$template = $this->loadView('myAccount-view');
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