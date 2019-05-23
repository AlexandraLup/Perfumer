
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
			$parola=$_POST["psw"];
			

			$info =$model->getEmail($email);
			if($info[0] == '0'){

				//trebuie sa ma inregistrez mai intai
				$template->set('login', 'inexistent');
			}
			else{
				//tre' sa fac o sesiune de login
				$parolaDB= $model->getPassword($email);

				$hash = $parolaDB['parola'];
				$check= password_verify($parola, $hash);
				
				var_dump($check);
/*
				if($check==1){
					//fac sesiunea
					print_r($check);
				}
				else{
					$template->set('parolaGresita','ok');
				}	*/			
			}
		}
		$template->render();
	}
}
?>