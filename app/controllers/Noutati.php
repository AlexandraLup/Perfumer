<?php
include APP_DIR . 'models/NoutatiModel.php';

class Noutati extends Controller {
	
	function index()
	{
	    $model= new NoutatiModel();
		$template = $this->loadView('noutati-view');

		$info=$model->getDetails();
		$info2=$model->getRowCount();
		$count= (int)20;
	
		$template->set('total_row',$count);
		$template->set('produs', $info);
		
		$template->render();
	}
}
?>

