
<?php
include APP_DIR.'helpers/session_helper.php';
class Login extends Controller {
	
	function index()
	{
		//$model=$this->loadModel('LoginModel');
		$template = $this->loadView('login-view');
		$template->render();
	}
}
?>