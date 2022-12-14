<?php
require_once './app/controllers/JuegoController.php';
require_once './app/controllers/GeneroController.php';
require_once './app/controllers/AuthController.php';
require_once './app/helpers/AuthHelper.php';



define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'juegos';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'verify':
        $authController = new AuthController();
        $authController->verifyLogin();
        break;
    case 'logout':
        $authHelper = new AuthHelper();
        $authHelper->logOut();
        break;
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
    case 'juegosByGenero':
        $juegoController = new JuegoController();
        $juegoController->getJuegosByGenero($params[1]);
        break;
    case 'generos':
        $generoController = new GeneroController();
        $generoController->showGeneros();
        break;
    case 'addGenero':
        $generoController = new GeneroController();
        $generoController->addGenero();
        break;
    case 'removeGenero':
        $generoController = new GeneroController();
        $generoController->removeGenero($params[1]);
        break;
    case 'changeGenero':
        $generoController = new GeneroController();
        $generoController->changeGenero($params[1]);
        break;
    case 'modifyGenero':
        $generoController = new GeneroController();
        $generoController->modifyGenero($params[1]);
        break;
    default:
        echo ('404 Page not found');
        break;
}
