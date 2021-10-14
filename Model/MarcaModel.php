<?php

class MarcaModel{

    private $db;
    
    function __construct()  {
        $this->db=new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8','root','');
    }
    //trae todas las marcas
    function obtenerMarca(){
        $sentencia=$this->db->prepare("SELECT * FROM marca ORDER BY marca.marcaNom");
        $sentencia->execute();
        $marcas=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $marcas;
    }
    //trae marca segun su id
    function obtenerMarca($id){
        $sentencia=$this->db->prepare("SELECT * FROM marca WHERE id_marca=? ORDER BY marca.marcaNom");
        $sentencia->execute(array($id));
        $marca=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $marca;
    }

    //inserta marca
    function agregarMarca($nombre){
        $sentencia=$this->db->prepare("INSERT INTO marca(marcaNom) VALUE (?)");
        $sentencia->execute(array($nombre));
        return $this->db->lastInsertId();
    }

    //elimina marca por id
    function borrarMarca($id){
        $sentencia=$this->db->prepare("DELETE FROM marca WHERE id_marca=?");
        $sentencia->execute(array($id));

    }
    //edita una marca
    function editarMarca($nombre,$id){
        $sentencia=$this->db->prepare("UPDATE marca SET marcaNom=? WHERE id_marca=?");
        $sentencia->execute(array($nombre,$id));
    }


}