<?php
class UserModel {
    private $db;
    
    function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_juegos;charset=utf8','root', '');
    }

    function getUser($email){
        $query = $this->db->prepare('SELECT * FROM user WHERE email=?');
        $query->execute(array($email));
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function addUser($email, $password){
        $query = $this->db->prepare('INSERT INTO user (email, password) VALUES(?,?)');
        $query->execute(array($email, $password));
    }

    function getUserById($id){
        $query = $this->db->prepare('SELECT * FROM user WHERE id_user=?');
        $query->execute(array($id));
        $userId = $query->fetch(PDO::FETCH_OBJ);
        return $userId;
    }
    
}