<?php
include APP_DIR.'models/ProdusModel.php';
class Produs extends Controller {
	
	function index()
	{
		$model=new  ProdusModel();
		$template = $this->loadView('produs-view');
		$info = $model->getDetails('candy prada');
		$result = $model -> getComments('candy prada');
		$template->set('produs', $info) ;
		$template->set('comments',$result);
		$template->render();
	}
}
?>