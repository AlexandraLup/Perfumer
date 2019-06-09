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

		$info4=$model->getRowVandut();
		$countVandut=(int)$info4[0];
	
		$template->set('total_row',$count);
		$template->set('total_rowVandut',$countVandut);
		$template->set('produs', $info);
		

		if(isset($_POST["filtru"])){
			if(isset($_POST["radio"])){
				if(($selectRadio= $_POST["radio"]) =='asc'){

					$info3=$model->getDetailsAsc();
					$template->set('produsAsc', $info3);
				}
				else 
				{
					$info3=$model->getDetailsDesc();
					$template->set('produsDesc', $info3);
				}
			}
			
		}

		if(isset($_POST["filtru2"])){
			if(isset($_POST["radio"])){
				if(($selectRadio= $_POST["radio"]) =='celeMaiNoi'){

					$info3=$model->getDetailsNoi();
					$template->set('produseNoi', $info3);
				}
				else 
				{
					$info3=$model->getDetailsVandut();
					$template->set('produsVandut', $info3);
				}
			}
			
		}
		
		
		$template->render();
	}
}
?>

