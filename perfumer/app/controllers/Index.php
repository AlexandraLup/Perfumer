<?php
class Index extends Controller {
	
	function index()
	{
	 
		$template = $this->loadView('index-view');
		$template->render();
	}
}
?>