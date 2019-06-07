<?php
include APP_DIR.'models/ProdusModel.php';
class Produs extends Controller {
	
	function index()
	{
		$model=new  ProdusModel();
		$template = $this->loadView('produs-view');
		$info = $model->getDetails('candy prada');
		$result = $model -> getFirstComments('candy prada');
		$template->set('produs', $info) ;
		$template->set('comments',$result);
		if(isset($_POST['wishlist'])){
			if(isset($_SESSION['email'])){
				$result = $model -> getId($_SESSION['email']);
				$id = $result['id'];
				$result = $model ->addToWishlist($id,$info['id']);
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
					$price = $_POST['quantity'];
					$result = $model ->addToBasket($info['id'],$id,$price);
				}
				else{
					echo 'Nu ai selectat cantitatea';
				}
			}
			else{
				echo 'Nu esti logat';
			}
		}
		$template->render();

	}
}
?>