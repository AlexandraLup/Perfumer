<?php

class Reclamatii extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('reclamatii-view');
        
 		
		$template->render();
			
			
		
	}
}
?>