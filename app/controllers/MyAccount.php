<?php

class MyAccount extends Controller {
	
	function index()
	{
		$template = $this->loadView('myAccount-view');
		$model=$this->loadModel('MyAccountModel');
		if(isset($_SESSION["id"])){
			$info = $model->getDetailsWish($_SESSION["id"]);
			$info2= $model->getRowWish($_SESSION["id"]);
			$count= (int)$info2[0];
		

			$template->set('produsWish', $info);
			$template->set('rowWish', $count);

		}else{
			$count= 0;
			$template->set('rowWish', $count);
		}

		$template->render();
	}

	function settings(){
		
		$template = $this->loadView('personaldata-view');
		$model=$this->loadModel('MyAccountModel');
		$userID = $_SESSION['id'];
		$userDetails = $model->getPersonalData($userID);
	    $template->set('details',$userDetails);
		$template->render();
	}

	function edit(){
		
		$template = $this->loadView('personaldataedit-view');
		$model=$this->loadModel('MyAccountModel');
		$userID = $_SESSION['id'];
		if(isset($_POST['submit'])){
			$address = $_POST['adresa'];
			$postal = $_POST['cod'];
			$town = $_POST['oras'];
			$county = $_POST['judet'];
			$phone = $_POST['telefon'];
			$result= $model->update($userID, $address, $postal , $town, $county, $phone);
			$this->redirect('MyAccount/settings');
		unset($_POST);
		}
	   
		$template->render();
	}

	function comenzi(){
		
		$template = $this->loadView('comenzi-view');
		$model=$this->loadModel('MyAccountModel');
		$userID = $_SESSION['id'];
		
		$template->render();
	}
}
?>