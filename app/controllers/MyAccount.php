<?php
class MyAccount extends Controller {
	
	function index()
	{
	   
		$template = $this->loadView('myAccount-view');
		$template->render();
	}
}
?>