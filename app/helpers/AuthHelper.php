<?php
class AuthHelper
{
    function __construct() {}
    //si el usuario pasa esta validacion es porque esta logeado
    function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: ' .BASE_URL . 'login');
            die();
        }
    }
    //con esta funcion cierro la sesion
    function logOut() {
        session_start();
        session_destroy();
        header("Location: " .BASE_URL.'login');
    }
    //con esta funcion busco que me diga si esta o no logeado
    function isLogged() {
        session_start();
        if (!isset($_SESSION['email'])) {
            return false;
        }
        return true;
    }
}
