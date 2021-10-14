<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class EditView{

    function __construct(){
    }

    public function DisplayCelulares($celulares,$marca,$mail){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Celulares disponibles");
        $smarty->assign('lista_celulares',$celulares);
        $smarty->assign('lista_marca',$marca);
        $smarty->assign('mail',$mail);
        $smarty->display('templates/edit.tpl');
    }
}