<?php
class ShoppingCart extends Controller {
	
	function index()
	{
	
		$template = $this->loadView('shoppingCart-view');
		$template->render();
	}
}
?>