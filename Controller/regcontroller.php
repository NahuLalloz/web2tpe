<?php
require_once './Model/UserModel.php';
require_once './Views/regview.php';

class regController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new userModel();
        $this->view = new RegView();
    }

    function locacionLogin(){
        header("Location: ". LOGIN_URL);
    }

    function GetRegistro(){
        $this->view->Display(null);
    }

    function Registro(){
            $hash = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
            $this->model->addUser($_POST['mail'],$hash);
            $this->locacionLogin();
    }
}
