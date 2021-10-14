<?php
require_once './Model/CelularesModel.php';
require_once './Model/MarcaModel.php';
require_once './Views/editView.php';

class ModificarController{
    private $marcacel;
    private $preciocel;
    private $modificarView;

    function __construct(){
        $this->celularesModel=new CelularesModel();   
        $this->marcaModel=new MarcaModel();
        $this->editView=new EditView();

    }
    public function checkLogginIn(){
        session_start();
        if(!isset($_SESSION['mail'])){
            header("Location: " . LOGIN_URL);
            die();
        }else{
            header("Location:". BASE_URL);
        }
    }
   
    function getCelulares(){
        session_start();
        $mail= $_SESSION['mail'];
        $celulares=$this->CelularesModel->getCelulares();
        $celulares=$this->MarcaModel->getMarca();
        $this->editView->DisplayCelulares($celulares,$marca,$mail);

    }
   
    function locacionModificar(){
        header("Location: ". MODIFICAR_URL);
    }
   
    function addCel(){  
        $this->checkLogginIn();
        $this->CelularModel->addCel($_POST['nombre'],$_POST['precio'],$_POST['caracteristicas'],$_POST['stock']);
        $this->locacionModificar();
       
    }
    
    function deleteCel($id){
        $this->checkLogginIn();
        $this->celularModel->deleteCel($id);
        $this->locacionModificar();
    }
    
    public function editarCel(){
        $this->checkLogginIn();
        $id = $_POST['id_producto'];
        $this->celularModel->editCel( $_POST['color'], $_POST['precio'], $_POST['precio'], $_POST['editar-marca'], $id);
        $this->locacionModificar();
    }

    

  
    function addMarca(){
        $this->checkLogginIn();
        $this->marcaModel->addmarca($_POST['nombre-marca']);
        $this->locacionModificar();
    }

   
    function editarMarca(){
        $this->checkLogginIn();
        $this->marcaModel->editGenero($_POST['marca'],$_POST['id-marca']);
        $this->locacionModificar();
    }
    
    function deleteMarca($id){
        $this->checkLogginIn();
        $this->marcaModel->deleteMarca($id);
        $this->locacionModificar();
    }
}