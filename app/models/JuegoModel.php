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

    //busco los juegos y los nombres de genero que le corresponden a cada uno
    function getJuegosInformacion(){
        $query = $this->db->prepare('SELECT j.id_juego, j.nombre, j.descripcion, j.precio, j.id_genero, g.nombre as nombreGenero FROM juego j JOIN genero g ON g.id_genero = j.id_genero');
        $query->execute();
        $juegos = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegos;
    }

    //busco el juego y el nombre de genero que le corresponde
    function getJuegoInformacion($idJuego){
        $query = $this->db->prepare('SELECT j.id_juego, j.nombre, j.descripcion, j.precio, j.id_genero, g.nombre as nombreGenero FROM juego j JOIN genero g ON g.id_genero = j.id_genero WHERE j.id_juego=?');
        $query->execute(array($idJuego));
        $juego = $query->fetch(PDO::FETCH_OBJ);
        return $juego;
    }
    
    //busco todos los juegos y los nombres de genero de un genero
    function getJuegosInformacionByGenero($idGenero){
        $query = $this->db->prepare('SELECT j.id_juego, j.nombre, j.descripcion, j.precio, j.id_genero, g.nombre as nombreGenero FROM juego j JOIN genero g ON g.id_genero = j.id_genero WHERE g.id_genero=?');
        $query->execute(array($idGenero));
        $juegosByGenero = $query->fetchAll(PDO::FETCH_OBJ);
        return $juegosByGenero;
    }

}

