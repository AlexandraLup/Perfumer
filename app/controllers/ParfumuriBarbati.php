<?php
include APP_DIR . 'models/ParfumuriBModel.php';

class ParfumuriBarbati extends Controller {
	
	function index()
	{
	    $model= new ParfumuriBModel();
		$template = $this->loadView('parfumuribarbati-view');

		$info=$model->getDetails();
		$info2=$model->getRowCount();
		$count= (int)$info2[0];
	
		$template->set('total_row',$count);
		$template->set('produs', $info);
		
		$template->render();
	}
}
?>

