<?php

class Index extends Controller {
	
	function index()
	{
	   //	$model=new Login_model();
		$template = $this->loadView('index-view');
        
 		/*if(isset($_POST["logout"])){
			session_destroy();
			$this->redirect('login');
		}*/
		$template->render();
			
			
		
	}
}
?>