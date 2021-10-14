<?php
require_once './Controller/CelularController.php';
require_once './Controller/modificarcontroller.php';
require_once './Controller/Login.php';
require_once './Controller/regController.php';


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("MODIFICAR_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/modificar');
define("LOGIN_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("REGISTRO_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registro');

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action='home';
}

$params=explode('/',$action);

$CelularController = new CelularController();
$modificarcontroller=new modificarcontroller();
$Login¡=new LoginController();
$regController=new regController();

switch($params[0]){
    case 'home':
        $CelularController->getCelulares();
        break;
    case 'caractCel':
        $CelularController->getCaractCel($params[1]);
        break;
    case 'showSeries':
        $CelularController->getMarca();
        break;
    case 'genero':
        $CelularController->getCelPorMarca($params[1]);
        break;
    case'registro':
        $regController->GetReg();
        break;   
    case 'regusuario':
        $regController->Registro();
        break;
    case 'login':
        $Login->GetLogin();
        break;
    case'iniciarSesion':
        $Login->IniciarSesion();
        break;
    case 'Desconectar':
        $Login->Logout();        
        break;
    case 'modificar':
        $modificarcontroller->getCelulares();
        break;
    case 'addCelular':
        $modificarcontroller->addCelular();
        break;
    case 'eliminarCelular':
        $modificarcontroller->deleteCel($params[1]);
        break;
    case 'editarCelular':
        $modificarcontroller->editarCelular();
        break;
    case 'agregarMarca':
        $modificarcontroller->addMarca();
        break;
    case 'editarMarca':
        $modificarcontroller->editarMarca();
        break;
    case 'borrarMarca':
        $modificarcontroller->deleteMarca($params[1]);
}

?>