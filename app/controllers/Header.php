<?php
class Header extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('header');
       

		$template->render();
			
			
		
	}
}
?>