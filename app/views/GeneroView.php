<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class GeneroView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showGeneros($generos, $isLoged) {
        $this->smarty->assign('listaGeneros', $generos);
        $this->smarty->assign('isLoged', $isLoged);

        $this->smarty->display('generosList.tpl','addGenero.tpl');
        // $this->smarty->display('addGenero.tpl');
    }

    public function generoToModify($genero){
        $this->smarty->assign('generoData',$genero);
        $this->smarty->display('modifyGenero.tpl');

    }

}