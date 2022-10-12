<?php
require_once './app/models/GeneroModel.php';
// require_once './app/views/GeneroView.php';

class GeneroController{
    private $model;

    public function __construct() {
        $this->model = new GeneroModel();
    }

    function showGeneros(){
        $generos = $this->model->getGeneros();
        //agregar vista
    }

    function addGenero(){
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $genero = $this->model->insertGenero($nombre, $descripcion);
        //agregar vista
    }

    function removeGenero($id){
        $genero= $this->model->deleteGenero($id);
        //agregar vista
    }

    function changeGenero($id){
        $nombre = $_POST['nombreGenero'];
        $descripcion = $_POST['descripcionGenero'];
        $genero = $this->model->modifyGenero($id, $nombre, $descripcion);
        //agregar vista
    }



}