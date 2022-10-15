<?php
class AuthHelper
{
    function __construct() {}

    function checkLoggedIn() {
        session_start();
        if (!isset($_SESSION['email'])) {
            header('Location: ' .BASE_URL . 'login');
            die();
        }
    }

    function logOut() {
        session_start();
        session_destroy();
        header("Location: " .BASE_URL.'login');
    }
}
