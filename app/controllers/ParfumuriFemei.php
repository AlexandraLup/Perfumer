<?php
include APP_DIR . 'models/ParfumuriFModel.php';

class ParfumuriFemei extends Controller {
	
	function index()
	{
	    $model= new ParfumuriFModel();
		$template = $this->loadView('parfumurifemei-view');

		$info=$model->getDetails();
		$info2=$model->getRowCount();
		$count= (int)$info2[0];
	
		$template->set('total_row',$count);
		$template->set('produs', $info);
		

		if(isset($_POST["filtru"])){
			$selectRadio= $_POST["radio"];
			if($selectRadio =='asc'){

				$info3=$model->getDetailsAsc();
				$template->set('produsAsc', $info3);
			}
			else
			{
				$info3=$model->getDetailsDesc();
				$template->set('produsDesc', $info3);
			}
			
		}
		
		
		$template->render();
	}
}
?>

