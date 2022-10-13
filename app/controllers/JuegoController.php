<?php
require_once './app/models/JuegoModel.php';
require_once './app/views/JuegoView.php';

class JuegoController{
    private $model;
    private $modelGenero;
    private $view;

    public function __construct() {
        $this->model = new JuegoModel();
        $this->modelGenero = new GeneroModel();
        $this->view = new JuegoView();
    }

    function showJuegos(){
        $juegos = $this->model->getJuegos();
        $idGeneroDistinto = $this->modelGenero->getIdGeneroDistintos();
        $this->view->showJuegos($juegos, $idGeneroDistinto);
    }

    function showJuego($idJuego){
        $juego = $this->model->getJuego($idJuego);
        $genero = $this->modelGenero->getGenero($juego->id_genero);
        $this->view->showJuego($juego, $genero);
    }

    function addJuego(){
        $nombre = $_POST['nombreJuego'];
        $descripcion = $_POST['descripcionJuego'];
        $precio = $_POST['precioJuego'];
        $id_genero = $_POST['idGeneroJuego'];
        $this->model->insertJuego($nombre, $descripcion, $precio, $id_genero);
        header("Location: ".BASE_URL."juegos");
    }

    function removeJuego($id){
        $this->model->deleteJuego($id);
        header("Location: ".BASE_URL."juegos");
    }

    function changeJuego($id){
        $juego = $this->model->getJuego($id);
        $idGeneroDistinto = $this->modelGenero->getIdGeneroDistintos();
        $this->view->juegoToModify($juego, $idGeneroDistinto);
    }

    function modifyJuego($id){
        $nombre = $_POST['nombreJuego'];
        $descripcion = $_POST['descripcionJuego'];
        $precio = $_POST['precioJuego'];
        $id_genero = $_POST['idGeneroJuego'];
        $this->model->modifyJuego($id, $nombre, $descripcion, $precio, $id_genero);
        header("Location: ".BASE_URL."juegos");

    }

    function getJuegosByGenero($idGenero){
        $juegosByGenero = $this->model->getJuegoByIdGenero($idGenero);
        $genero = $this->modelGenero->getGenero($idGenero);
        $this->view->juegosByGenero($juegosByGenero, $genero);
    }

}