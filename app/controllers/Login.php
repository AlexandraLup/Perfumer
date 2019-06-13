
<?php
include APP_DIR . 'models/LoginModel.php';
include APP_DIR.'helpers/session_helper.php';
class Login extends Controller {
	
	function index()
	{
		$model = new LoginModel();
		$template = $this->loadView('login-view');
		

		if(isset($_POST["login"])){
			$email= $_POST["email"];
			$parola=$_POST["psw"];
			
			$data['email']=$email;
			$data['parola']=$parola;
			$template->set('verificare',$data);

			$info =$model->getEmail($email);
			$infoId = $model->getId($email);

			if(!isset($info["email"])){

				//trebuie sa ma inregistrez mai intai
				$template->set('login', 'inexistent');
			}
			else{
				//trebuie sa fac o sesiune de login
				$parolaDB= $model->getPassword($email);
				$hash = $parolaDB['parola'];
			
				$check= password_verify($parola, $hash);
				
				if($check==true){
					//fac sesiunea
					 
					$_SESSION['email'] = $email;
					$_SESSION['id']=$infoId["id"];
				    $template->set('inIndex','ok');
				}
				else{
					$template->set('parolaGresita','ok');
				}			
			}

		}

		


		$template->render();
	}
}
?>