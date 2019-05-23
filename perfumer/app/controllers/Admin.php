<?php
class Admin extends Controller {
	
	function index()
	{   
		$template = $this->loadView('admin-view');
		if (isset($_POST)) {
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
			$essense   = trim($_POST['essence']);
			$category  = trim($_POST['category']);
			$base  = trim($_POST['base']);
			$heart   = trim($_POST['heart']);
			$top   = trim($_POST['top']);
			$description = trim($_POST['description']);
		}
		$template->render();
	}
}
?>