<?php
require_once './app/controllers/JuegoController.php';
require_once './app/controllers/GeneroController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'juegos';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'juegos':
        $juegoController = new JuegoController();
        $juegoController->showJuegos();
        break;
    case 'show':
        $juegoController = new JuegoController();
        $juegoController->showJuego($params[1]);
        break;
    case 'add':
        $juegoController = new JuegoController();
        $juegoController->addJuego();
        break;   
    case 'remove':
        $juegoController = new JuegoController();
        $juegoController->removeJuego($params[1]);
        break;
    case 'change':
        $juegoController = new JuegoController();
        $juegoController->changeJuego($params[1]);
        break;
    case 'modify':
        $juegoController = new JuegoController();
        $juegoController->modifyJuego($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
