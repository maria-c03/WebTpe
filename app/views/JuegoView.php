<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class JuegoView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showJuegos($juegosInformacion, $listaGeneros, $isLoged) {
        // asigno variables al tpl smarty
        $this->smarty->assign('listaJuegoInformacion', $juegosInformacion);
        $this->smarty->assign('listaGenero', $listaGeneros);
        $this->smarty->assign('isLoged', $isLoged);

        // mostrar el tpl
        $this->smarty->display('juegosList.tpl');
    }

    public function showJuego($juegoInformacion) {
        // asigno variables al tpl smarty
        $this->smarty->assign('juegoInformacion', $juegoInformacion);
        // mostrar el tpl
        $this->smarty->display('verJuego.tpl');
    }

    public function juegoToModify($juego, $listaGenero){
        $this->smarty->assign('juegoData', $juego);
        $this->smarty->assign('listaGeneros', $listaGenero);
        $this->smarty->display('modifyJuego.tpl');
    }

    public function juegosByGenero($listaJuegosporGenero){
        $this->smarty->assign('listaJuegosByGenero',$listaJuegosporGenero);
        $this->smarty->display('showListaJuegosByGenero.tpl');
    }
}
