<?php

require_once('librerias/smarty-3.1.39/libs/Smarty.class.php');

class LogView {

    function __construct(){
    }

    public function showLoggin($msjError){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',LOGIN_URL);
        $smarty->assign('error', $mensajeError);
        $smarty->display('templates/log.tpl');
    }

    public function DisplayLogin(){
    
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',LOGIN_URL);
        $smarty->display('templates/log.tpl');
    }
}

?>