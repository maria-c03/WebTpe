<?php
class JuegoModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8','root', '');
    }
    
    //listar los items
    function getJuegos(){
        $sentencia = $this->db->prepare('SELECT * FROM juego');
        $sentencia->execute();
        $juegos = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
    
    //listar un item
    function getJuego($id){
        $query = $this->db->prepare("SELECT * FROM juego WHERE id_juego=?");
        $query->execute(array($id));
        $juego = $query->fetch(PDO::FETCH_OBJ);
        return $juego;
    }
    //agregar un juego(ALTA)
    function insertJuego($nombre, $descripcion, $precio, $id_genero){
        $query = $this->db->prepare("INSERT INTO juego(nombre, descripcion, precio, id_genero) VALUES(?, ?, ?, ?)");
        $query->execute(array($nombre, $descripcion, $precio, $id_genero));
    }
    
    //modificar un juego(MODIFICACION)
    function modifyJuego($id, $nombre, $descripcion, $precio, $id_genero){
        $sentencia = $this->db->prepare("UPDATE juego SET nombre=?, descripcion=?, precio=?, id_genero=? WHERE id_juego=?");
        $sentencia->execute(array($nombre, $descripcion, $precio, $id_genero, $id));
    }
    
    //borrar un juego (BAJA)
    function deleteJuego($id){
        $sentencia = $this->db->prepare("DELETE FROM juego WHERE id_juego=?");
        $sentencia->execute(array($id));
    }
    
    function getIdGeneroDistintos(){
        $query = $this->db->prepare("SELECT DISTINCT(id_genero) FROM juego");
        $query->execute();
        $idGeneroDistinto = $query->fetchAll(PDO::FETCH_OBJ);
        return $idGeneroDistinto;
    }
}