<?php
class Admin extends Controller {
	
	function index()
	{   
		$template = $this->loadView('admin-index');
		$template->render();
	}

	function rapoarte(){
   
		$template = $this->loadView('admin-rapoarte');
		$template->render();
	}

	function add(){
 
		$template = $this->loadView('admin-add');
		$model = $this->loadModel('AdminModel');
		if (isset($_POST['submit'])) {
			$barcode = trim($_POST['barcode']);
			$name    = trim($_POST['name']);
			$gender    = trim($_POST['gender']);
			$price1   = (float) $_POST['price1'];
			$qty1     = (int) $_POST['qty1'];
			$price2   = (float) $_POST['price2'];
			$qty2     = (int) $_POST['qty2'];
			$qty3     = (int) $_POST['qty3'];
            $price3   = (float) $_POST['price3'];
			$image   = trim($_POST['image']);
			$essence   = trim($_POST['essence']);
			$category  = trim($_POST['category']);
			$base  = trim($_POST['base']);
			$heart   = trim($_POST['heart']);
			$top   = trim($_POST['top']);
			$description = trim($_POST['description']);
			 
			$model->addProduct($barcode, $name,$gender, $category,$essence,$description,$image);
			$model ->addComposition($barcode,$base, $top, $heart);
			$model -> addStock($barcode, $qty1, $price1, $qty2, $price2, $qty3, $price3);
			$template -> set('success', true);

		}
		
		$template->render();
	}

	function delete(){

		$template = $this->loadView('admin-delete');
		$model = $this->loadModel('AdminModel');
		$template->render();
		var_dump($_POST['cod']);
		if(isset($_POST['delete'])){
			$barcode = $_POST['cod'];
			var_dump($barcode);
			$result = $model -> deleteProduct($barcode);
			if($result == true){
				$template->set('success', true);
			}
			else {
				$template->set('success', false);
			}
			  

		}
	}

}
?>