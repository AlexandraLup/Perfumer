<?php

class DespreNoi extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('despreNoi-view');
        
 		
		$template->render();
			
			
		
	}
}
?>