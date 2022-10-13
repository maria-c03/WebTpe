<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class JuegoView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
    }

    public function showJuegos($juegos, $idGeneroDistinto) {
        // asigno variables al tpl smarty
        $this->smarty->assign('listaJuegos', $juegos);
        $this->smarty->assign('listaIdGenero', $idGeneroDistinto);

        // mostrar el tpl
        $this->smarty->display('juegosList.tpl');
    }

    public function showJuego($juego, $genero) {
        // asigno variables al tpl smarty
        $this->smarty->assign('detalleJuego', $juego);
        $this->smarty->assign('genero', $genero);

        // mostrar el tpl
        $this->smarty->display('verJuego.tpl');
    }

    public function juegoToModify($juego, $idGeneroDistinto){
        $this->smarty->assign('juegoData', $juego);
        $this->smarty->assign('listaIdGenero', $idGeneroDistinto);
        $this->smarty->display('modifyJuego.tpl');
    }

    public function juegosByGenero($juegosByGenero, $genero){
        $this->smarty->assign('listaJuegosByGenero',$juegosByGenero);
        $this->smarty->assign('genero',$genero);
        $this->smarty->display('showListaJuegosByGenero.tpl');
    }
}
