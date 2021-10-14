<?php
require_once "./Model/UserModel.php";
require_once "./Views/Logview.php";
class LoginController{
    private $model;
    private $view;

    public function __construct(){
        $this->model=new UserModel();
        $this->view=new logview();
    }

    public function IniciarSesion(){
            $contraseña = $_POST['contraseña'];
            $mail=$this->model->GetPassword($_POST['mail']);
            if ($mail != null && password_verify($contraseña,$mail->contraseña)){
                session_start();
                $_SESSION['mail'] = $mail;
                header("Location: " . MODIFICAR_URL);
            }else{
                $this->view->showLoggin("Datos incorrectos");
            }
        }

    public function GetLogin(){
        $this->view->DisplayLogin(); 
    }
    
    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }


}