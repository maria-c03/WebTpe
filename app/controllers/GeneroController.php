<?php
require_once './app/models/GeneroModel.php';
require_once './app/views/GeneroView.php';

class GeneroController{
    private $model;
    private $view;

    public function __construct() {
        $this->model = new GeneroModel();
        $this->view = new GeneroView();
    }

    function showGeneros(){
        $generos = $this->model->getGeneros();
        $this->view->showGeneros($generos);
    }

    function addGenero(){
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $this->model->insertGenero($nombre, $descripcion);
        header("Location: ".BASE_URL."generos");
    }

    function removeGenero($id){
        $this->model->deleteGenero($id);
        header("Location: ".BASE_URL."generos");
    }


    function changeGenero($id){
        $genero = $this->model->getGenero($id);
        $this->view->generoToModify($genero);
    }

    function modifyGenero($id){
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $this->model->modifyGenero($id, $nombre, $descripcion);
        header("Location: ".BASE_URL."generos");
    }
}