<?php
include APP_DIR . 'models/IndexModel.php';
class Index extends Controller {
	
	function index()
	{
	    $model=new IndexModel();
		$template = $this->loadView('index-view');
        
        $info=$model->getDetails();
		$info2=$model->getRowCount();
		$count= (int)4;
	
		$template->set('total_row',$count);
		$template->set('produs', $info);



		if(isset($_POST["filtru"])){
			if(isset($_POST["radio"])){
				if(($selectRadio= $_POST["radio"]) =='asc'){

					$info3=$model->getDetailsAsc();
					$template->set('femei', $info3);
				}
				else 
				{
					$info3=$model->getDetailsDesc();
					$template->set('barbati', $info3);
				}
			}
			
		}

		
	
 		
		$template->render();
			
			
		
	}
}
?>