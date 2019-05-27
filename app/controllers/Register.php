<?php
include APP_DIR . 'models/RegisterModel.php';
include APP_DIR.'helpers/session_helper.php';
class Register extends Controller {
	
	function index()
	{
		$model = new RegisterModel();
		$template = $this->loadView('register-view');
		

		if(isset($_POST ["nume"]) && isset($_POST["prenume"])){

			$nume= $_POST ["nume"];
			$prenume = $_POST["prenume"];
			$adresa = $_POST["adresa"];
			$sex = $_POST["sex"];
			$email= $_POST["email"];
			$telefon= $_POST["telefon"];
			$parola1= $_POST["pass1"];
			$parola2= $_POST["pass2"];
			$preferinta1= $_POST["preferinta1"];
			$preferinta2= $_POST["preferinta2"];

			$info= $model->getEmail($email);
			if($info[0] == '0')
			{//email-ul e valid.
				
				if($parola1==$parola2)
				{
					$parola1=password_hash($parola2, PASSWORD_DEFAULT);

					$model->createAccount($nume, $prenume,$adresa, $sex, $email, $telefon, $parola1);

					$idPref=$model->getId($email);
					$idUser=(int)$idPref[0];
					$model->addPreferinte($idUser,$preferinta1);
					$model->addPreferinte($idUser,$preferinta2);

					$this->redirect('login');
					
				}
				else
					$template->set('parolaNeconfirmata', 0);
			}
			else
				$template->set('emailNevalid',0);
		
		}


		$template->render();
	}
}
?>