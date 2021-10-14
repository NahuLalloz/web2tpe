<?php
require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class CelularesView{


    function __construct(){}

    function DisplayCels($celulares,$marca,$mail){
        $smarty=new Smarty();
        $smarty->assign('titulo','Más recomendados');
        $smarty->assign('tituloNav','Marca');
        $smarty->assign('lista_celulares',$celulares);
        $smarty->assign('lista_marcas',$marcas);
        $smarty->assign('mail',$mail);
        $smarty->display('templates/celularesver.tpl');
    }

    function infoCelular($celular){
        $smarty=new Smarty();
        $smarty->assign('titulo','caracteristicas del celular');
        $smarty->assign('celular',$celular);
        $smarty->display('templates/celular.tpl');
    }

    function showCels($celulares){
        $smarty=new Smarty();
        $smarty->assign('titulo','Stock');
        $smarty->assign('lista',$celulares);
        $smarty->display('templates/lista_celulares.tpl');
    }
}