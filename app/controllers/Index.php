<?php
include APP_DIR . 'models/IndexModel.php';
class Index extends Controller {
	
	function index()
	{
	    $model=new IndexModel();
		$template = $this->loadView('index-view');

        //preferinte
        if(isset($_SESSION["id"])){
        	$template->set('afiseazaPreferinte','ok');
        	  
    		$infoPp=$model->getEsente($_SESSION["id"]);
    		$infoP= $model->getDetailsP($infoPp[0]['esenta'],$infoPp[1]['esenta']);
			$count= $model->getTotalRow($infoPp[0]['esenta'],$infoPp[1]['esenta']);
			
			$template->set('produsP', $infoP);
			
			$count2=(int)5;
			if((int)$count[0] <= 5){
				$template->set('total_rowP',(int)$count[0]);
			}
			else{
				$template->set('total_rowP',$count2);}
        }
       


        //top noutati
        $info=$model->getDetails();
		$count= (int)4;
		$template->set('total_row',$count);
		$template->set('produs', $info);

 		


		$template->render();
				
	}
}
?>