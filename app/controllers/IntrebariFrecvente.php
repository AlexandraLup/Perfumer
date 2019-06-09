<?php

class IntrebariFrecvente extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('IntrebariFrecvente-view');
        
 		
		$template->render();
			
			
		
	}
}
?>