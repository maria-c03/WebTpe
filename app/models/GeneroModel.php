<?php
class GeneroModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8','root', '');
    }
    
    //listar los generos
    function getGeneros(){
        $sentencia = $this->db->prepare('SELECT * FROM genero');
        $sentencia->execute();
        $generos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    
    //agregar un genero(ALTA)
    function insertGenero($nombre, $descripcion){
        $query = $this->db->prepare("INSERT INTO genero(nombre, descripcion) VALUES(?, ?)");
        $query->execute(array($nombre, $descripcion));
    }
    
    //modificar un genero(MODIFICACION)
    function modifyGenero($id_genero, $nombre, $descripcion){
        $sentencia = $this->db->prepare("UPDATE genero SET nombre=?, descripcion=? WHERE id_genero=?");
        $sentencia->execute(array($nombre, $descripcion, $id_genero));
    }
    
    //borrar un genero (BAJA)
    function deleteGenero($id){
        $sentencia = $this->db->prepare("DELETE FROM genero WHERE id=?");
        $sentencia->execute(array($id));
    }
    
}