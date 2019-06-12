<?php

class ComandaProcesata extends Controller {

public function index(){

    $template= $this->loadView('comandaprocesata');
    $template->render();
}

}