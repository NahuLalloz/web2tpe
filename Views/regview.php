<?php

require_once('librerias/smarty-3.1.39/libs/Smarty.class.php');

class regView{

    function __construct(){
    }

    public function Display($error){
    
        $smarty = new Smarty();
        $smarty->assign("error", $error);
        $smarty->display('templates/reg.tpl');
    }
}

?>