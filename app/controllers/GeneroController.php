<?php
require_once './app/models/GeneroModel.php';
require_once './app/views/GeneroView.php';
require_once './app/helpers/AuthHelper.php';


class GeneroController{
    private $model;
    private $view;
    private $modelJuego;
    private $authHelper;

    public function __construct() {
        $this->model = new GeneroModel();
        $this->view = new GeneroView();
        $this->modelJuego = new JuegoModel();
        $this->authHelper = new AuthHelper();

    }

    function showGeneros(){
        $generos = $this->model->getGeneros();
        $this->view->showGeneros($generos);
    }

    function addGenero(){
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $this->model->insertGenero($nombre, $descripcion);
        header("Location: ".BASE_URL."generos");
    }

    function removeGenero($idGenero){
        $this->authHelper->checkLoggedIn();
        //si existe un juego con el id de ese genero, no se permite borrar
        $getJuegos=$this->modelJuego->getJuegoByIdGenero($idGenero);
        if(empty($getJuegos)){
            $this->model->deleteGenero($idGenero);
        }
    
        header("Location: ".BASE_URL."generos");
    }


    function changeGenero($id){
        $this->authHelper->checkLoggedIn();
        $genero = $this->model->getGenero($id);
        $this->view->generoToModify($genero);
    }

    function modifyGenero($id){
        $this->authHelper->checkLoggedIn();
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $this->model->modifyGenero($id, $nombre, $descripcion);
        header("Location: ".BASE_URL."generos");
    }
}