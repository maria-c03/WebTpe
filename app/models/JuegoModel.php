<?php
class JuegoModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8','root', '');
    }
    
    //listar los items
    function getJuegos(){
        $query = $this->db->prepare('SELECT * FROM juego');
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
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
        $query = $this->db->prepare("UPDATE juego SET nombre=?, descripcion=?, precio=?, id_genero=? WHERE id_juego=?");
        $query->execute(array($nombre, $descripcion, $precio, $id_genero, $id));
    }
    
    //borrar un juego (BAJA)
    function deleteJuego($id){
        $query = $this->db->prepare("DELETE FROM juego WHERE id_juego=?");
        $query->execute(array($id));
    }

    function getJuegoByIdGenero($idGenero){
        $query = $this->db->prepare('SELECT * FROM juego WHERE id_genero=?');
        $query->execute(array($idGenero));
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }
}