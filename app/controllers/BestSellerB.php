<?php
include APP_DIR . 'models/BestSellerBModel.php';
class BestSellerB extends Controller {
	
	function index()
	{
		$model = new BestSellerBModel();
		$template = $this->loadView('BestSellerB-view');
		
		$info = $model->getDetailsBestS();
		$info2= $model->getRowBestS();
		$count= (int)$info2[0];
	
		$template->set('produsWish', $info);
		$template->set('rowWish', $count);


		$template->render();
	}



	


}
?>