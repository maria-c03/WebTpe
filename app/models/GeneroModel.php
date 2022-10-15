<?php
class GeneroModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8','root', '');
    }
    
    //listar los generos
    function getGeneros(){
        $query = $this->db->prepare('SELECT * FROM genero');
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    
    function getGenero($id){
        $query = $this->db->prepare("SELECT * FROM genero WHERE id_genero=?");
        $query->execute(array($id));
        $genero = $query->fetch(PDO::FETCH_OBJ);
        return $genero;
    }

    //agregar un genero(ALTA)
    function insertGenero($nombre, $descripcion){
        $query = $this->db->prepare("INSERT INTO genero(nombre, descripcion) VALUES(?, ?)");
        $query->execute(array($nombre, $descripcion));
    }
    
    //modificar un genero(MODIFICACION)
    function modifyGenero($id_genero, $nombre, $descripcion){
        $query = $this->db->prepare("UPDATE genero SET nombre=?, descripcion=? WHERE id_genero=?");
        $query->execute(array($nombre, $descripcion, $id_genero));
    }
    
    //borrar un genero (BAJA)
    function deleteGenero($id){
        $query = $this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $query->execute(array($id));
    }

    function getIdGeneroDistintos(){
        $query = $this->db->prepare("SELECT DISTINCT(id_genero) FROM genero");
        $query->execute();
        $idGeneroDistinto = $query->fetchAll(PDO::FETCH_OBJ);
        return $idGeneroDistinto;
    }
    
}