<?php
require_once('./Model/CelularesModel.php');
require_once('./Model/MarcaModel.php');
require_once('./Views/CelularesView.php');


class CelularController{
    private $celModel;
    private $celularesModel;
    private $celularesView;

    function __construct(){
        $this->marcaModel=new MarcaModel();
        $this->celularesModel=new CelularesModel();
        $this->celularesView=new CelularesView();
    }
    function User(){
        session_start();
        if(isset($_SESSION['mail'])){
            $mail = $_SESSION['mail'];
            return $mail;
        }
    }

    function getCelulares(){
        $celulares=$this->celularesModel->getCelulares();
        $marca=$this->celModel->getmarca();
        $this->celularesView->DisplayCelulares($celulares,$marca,$this->User());

    }

    function obtenerInfoCel($id){
        $celular=$this->celularModel->getCelular($id);
        $this->celularesView->caractCel($caracteristicas,$this->User());
    }

    function obtenerColorCel(){
        $color=$this->celularModel->getCelColor();
        $this->celularesView->showCelulares($color,$this->User());
    }
    function obtenerMarcaCel($marca){
        $celulares=$this->celularModel->getMarcaCel($marca);
        $this->marcaView->showCelulares($marca,$this->User());
    }
}