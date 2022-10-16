<?php
require_once './app/models/JuegoModel.php';
require_once './app/views/JuegoView.php';
require_once './app/helpers/AuthHelper.php';

class JuegoController{
    private $model;
    private $modelGenero;
    private $view;
    private $authHelper;

    public function __construct() {
        $this->model = new JuegoModel();
        $this->modelGenero = new GeneroModel();
        $this->view = new JuegoView();
        $this->authHelper = new AuthHelper();
    }

    function showJuegos(){
        $isLoged = $this->authHelper->isLogged();
        $juegosInformacion = $this->model->getJuegosInformacion();
        $listaGeneros= $this->modelGenero->getGeneros();
        $this->view->showJuegos($juegosInformacion, $listaGeneros, $isLoged);
    }

    function showJuego($idJuego){
        $juegoInformacion = $this->model->getJuegoInformacion($idJuego);
        $this->view->showJuego($juegoInformacion);
    }

    //guardo los valores de los input, le digo al modelo que lo agregue a la db
    function addJuego(){
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombreJuego'];
        $descripcion = $_POST['descripcionJuego'];
        $precio = $_POST['precioJuego'];
        $id_genero = $_POST['idGeneroJuego'];
        $this->model->insertJuego($nombre, $descripcion, $precio, $id_genero);
        header("Location: ".BASE_URL."juegos");
    }

    function removeJuego($id){
        $this->authHelper->checkLoggedIn();
        $this->model->deleteJuego($id);
        header("Location: ".BASE_URL."juegos");
    }


    function changeJuego($id){
        $this->authHelper->checkLoggedIn();
        $juego = $this->model->getJuegoInformacion($id);
        $listaGenero = $this->modelGenero->getGeneros();
        $this->view->juegoToModify($juego, $listaGenero);
    }

    //guardo los valores de los input,  le digo al modelo que lo modifique en la db
    function modifyJuego($id){
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombreJuego'];
        $descripcion = $_POST['descripcionJuego'];
        $precio = $_POST['precioJuego'];
        $id_genero = $_POST['idGeneroJuego'];
        $this->model->modifyJuego($id, $nombre, $descripcion, $precio, $id_genero);
        header("Location: ".BASE_URL."juegos");

    }

    //obtengo todos los juegos que tengan un mismo genero
    function getJuegosByGenero($idGenero){
        $listaJuegosporGenero = $this->model->getJuegosInformacionByGenero($idGenero);
        if($listaJuegosporGenero){
            $this->view->juegosByGenero($listaJuegosporGenero);
        }else{
            header("Location: ".BASE_URL."generos");
        }
    }

}