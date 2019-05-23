<?php
class Index extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('index-view');
		$template->render();
	}
}
?>