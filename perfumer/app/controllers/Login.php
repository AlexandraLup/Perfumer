
<?php
include APP_DIR . 'models/LoginModel.php';
include APP_DIR.'helpers/session_helper.php';
class Login extends Controller {
	
	function index()
	{
		$model = new LoginModel();
		$template = $this->loadView('login-view');
		

		if(isset($_POST["email"])){
			$email= $_POST["email"];
			$info =$model->getEmail($email);
			
			if($info[0] == '0')
				var_dump($info[0]);
		}
		$template->render();
	}
}
?>