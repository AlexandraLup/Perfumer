<?php
include APP_DIR.'models/ProdusModel.php';
class Produs extends Controller {
	
	function index()
	{
		$model=new  ProdusModel();
		$template = $this->loadView('produs-view');
		$info = $model->getDetails('candy prada');
		$result = $model -> getAllComments('candy prada');
		$template->set('produs', $info) ;
		$template->set('comments',$result);

        
		if(isset($_POST['wishlist'])){
			if(isset($_SESSION['email'])){
				$result = $model -> getId($_SESSION['email']);
				$id = $result['id'];
				$count= $model->getProductCount($info['id']);
				if(intval($count[0])!=1){ 
			     	$result = $model ->addToWishlist($id,$info['id']);
				}		
			}
			else {
				echo 'Nu esti logat';
			}
		}
		
		if(isset($_POST['basket'])){
		if(isset($_SESSION['email'])){
			$result = $model -> getId($_SESSION['email']);
			$id = $result['id'];	
		    if(isset($_POST['quantity'])){
				$stoc = 'stoc_' . $_POST['quantity'];
				$quantity= $_POST['quantity'];
			   if($info[$stoc] > 0) {
				   $price = 'pret_' . $_POST['quantity'];
				   $produsDetails = $model->getBasketInfo($info['id'], $quantity); 
				   if(strcmp(trim($produsDetails['ml']),trim($quantity))==0) {
					   $result= $model ->updateQuantity($info['id'],$info[$price]);
					   $template -> set('success', true);
                    } else{
					$result = $model ->addToBasket($info['id'],$id,$info[$price],$quantity);
					$template -> set('success', true);
				   }
				 

			   }
			   else{
				$template->set('stoc',false);
			   }
		}else{
			$template->set('cantitate',false);
		}
	}
}  	
    if(isset($_POST['addcomm'])){

		$name = $_POST['name'];
		$comentariu = $_POST['comm'];
		$idProdus= $info['id'];
		$return = $model -> addComentariu($idProdus,$name,$comentariu);
		$this->redirect('produs');
		unset($_POST);
	}
		
	 $template->render();
}



public function search($numeProdus){


		$model=new ProdusModel();
		$template = $this->loadView('produs-view');

		$proVars = str_replace('%20',' ',$numeProdus);



		$info = $model->getDetails($proVars);
		$result = $model -> getAllComments($proVars);
		$template->set('produs', $info) ;
		$template->set('comments',$result);

        
		if(isset($_POST['wishlist'])){
			if(isset($_SESSION['email'])){
				$result = $model -> getId($_SESSION['email']);
				$id = $result['id'];
				$count= $model->getProductCount($info['id']);
				if(intval($count[0])!=1){ 
			     	$result = $model ->addToWishlist($id,$info['id']);
				}		
			}
			else {
				echo 'Nu esti logat';
			}
		}
		
		if(isset($_POST['basket'])){
		if(isset($_SESSION['email'])){
			$result = $model -> getId($_SESSION['email']);
			$id = $result['id'];	
		    if(isset($_POST['quantity'])){
				$stoc = 'stoc_' . $_POST['quantity'];
				$quantity= $_POST['quantity'];
			   if($info[$stoc] > 0) {
				   $price = 'pret_' . $_POST['quantity'];
				   $produsDetails = $model->getBasketInfo($info['id'], $quantity); 
				   if(strcmp(trim($produsDetails['ml']),trim($quantity))==0) {
					   $result= $model ->updateQuantity($info['id'],$info[$price]);
					   $template -> set('success', true);
                    } else{
					$result = $model ->addToBasket($info['id'],$id,$info[$price],$quantity);
					$template -> set('success', true);
				   }
				 

			   }
			   else{
				$template->set('stoc',false);
			   }
		}else{
			$template->set('cantitate',false);
		}
	}
}  	
    if(isset($_POST['addcomm'])){

		$name = $_POST['name'];
		$comentariu = $_POST['comm'];
		$idProdus= $info['id'];
		$return = $model -> addComentariu($idProdus,$name,$comentariu);
		$this->redirect('produs');
		unset($_POST);
	}
		
	 $template->render();
	

}
}


?>