<?php
class Produs extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('produs-view');
		$template->render();
	}
}
?>