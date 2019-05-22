<?php
class ParfumuriFemei extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('parfumurifemei-view');
		$template->render();
	}
}
?>