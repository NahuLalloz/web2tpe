<?php

class celularesModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8','root','');
    }
    
    function obtenerCelulares(){
        $sentencia=$this->db->prepare("SELECT * FROM celular ORDER BY celular.nombre");
        $sentencia->execute();
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }
   
    function obtenerCelMarca(){
        $sentencia=$this->db->prepare("SELECT * FROM celular INNER JOIN marca on celular.id_marca=Marca.id_marca ORDER BY Marca.marcaNom,celular.nombre");
        $sentencia->execute();
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }
   
    function agregarCelular($nombre,$precio,$caracteristicas,$stock,$id_categoria){
        $sentencia=$this->db->prepare("INSERT INTO Producto(nombre,precio,caracteristicas,stock,id_marca) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($nombre,$precio,$caracteristicas,$stock,$id_marca));
        return $this->db->lastInsertId();
    }
  
    function eliminarCelular($id){
        $sentencia=$this->db->prepare("DELETE FROM Producto WHERE id_producto=? ");
        $sentencia->execute(array($id));
    }

    
    function getSerie($id){
        $sentencia=$this->db->prepare("SELECT*FROM Producto INNER JOIN marca ON Producto.id_marca=Marca.id_marca WHERE id_producto=? ");
        $sentencia->execute(array($id));
        $Producto=$sentencia->fetch(PDO::FETCH_OBJ);
        return $Producto;
    }

   
    function editarCel($nombre,$precio,$caracteristicas,$stock,$id_categoria){
        $sentencia=$this->db->prepare("UPDATE producto SET nombre=?,precio=?,caracteristicas=?,stock=?,id_marca=? WHERE id_producto=? ");
        $sentencia->execute(array($nombre,$precio,$caracteristicas,$stock,$id_marca));
    }
    
    function getMarcaCel($marca){
        $sentencia=$this->db->prepare("SELECT*FROM Producto INNER JOIN marca ON Producto.id_marca=Marca.id_marca WHERE Marca.marcaNom=?");
        $sentencia->execute(array($genero));
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }


}