<?php

class TermeniConditii extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('termeniConditii-view');
        
 		
		$template->render();
			
			
		
	}
}
?>