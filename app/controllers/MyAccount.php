<?php
class MyAccount extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('myAccount-view');
		$template->render();
	}
}
?>