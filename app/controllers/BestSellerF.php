<?php
include APP_DIR . 'models/BestSellerFModel.php';
class BestSellerF extends Controller {
	
	function index()
	{
		$model = new BestSellerFModel();
		$template = $this->loadView('BestSellerF-view');
		
		$info = $model->getDetailsBestS();
		$info2= $model->getRowBestS();
		$count= (int)$info2[0];
	
		$template->set('produsWish', $info);
		$template->set('rowWish', $count);


		$template->render();
	}



	


}
?>