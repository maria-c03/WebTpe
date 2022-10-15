<?php
require_once './app/views/LoginView.php';
require_once './app/models/UserModel.php';



class AuthController {
    private $model;
    private $view;

    function __construct() {
        $this->model = new UserModel();
        $this->view = new LoginView();
    }

    function showLogin(){
        $this->view->showLogin();
    }

    function verifyLogin(){
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->model->getUser($email);
            if(!$user){
                //flujo de registro
                $passwordHashed =password_hash($password, PASSWORD_BCRYPT) ;
                $user = $this->model->addUser($email,$passwordHashed);
                header('Location: '.BASE_URL.'juegos');
            }else{
                //flujo de login
                if(password_verify($password, $user->password)){
                    session_start();
                    $_SESSION['email'] = $email;
                    header('Location: '.BASE_URL.'juegos');
                }else{
                    $this->view->showLogin("Acceso denegado");
                }
            }
        }
    }

}
