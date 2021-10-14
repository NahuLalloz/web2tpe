<?php

class celularesModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8','root','');
    }
    //trae todas las series
    function obtenerCelulares(){
        $sentencia=$this->db->prepare("SELECT * FROM celular ORDER BY celular.nombre");
        $sentencia->execute();
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }
    //lista las series ordenada por gen
    function obtenerCelMarca(){
        $sentencia=$this->db->prepare("SELECT * FROM celular INNER JOIN marca on celular.id_categoria=Categoria.id_categoria ORDER BY Categoria.marcaNom,celular.nombre");
        $sentencia->execute();
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }
    //agrega una serie
    function agregarCelular($nombre,$precio,$caracteristicas,$stock,$id_categoria){
        $sentencia=$this->db->prepare("INSERT INTO Producto(nombre,precio,caracteristicas,stock,id_categoria) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($nombre,$precio,$caracteristicas,$stock,$id_categoria));
        return $this->db->lastInsertId();
    }
    //borra una serie segun el id
    function eliminarCelular($id){
        $sentencia=$this->db->prepare("DELETE FROM Producto WHERE id_producto=? ");
        $sentencia->execute(array($id));
    }

    //busca una serie segun el id
    function getSerie($id){
        $sentencia=$this->db->prepare("SELECT*FROM Producto INNER JOIN marca ON Producto.id_categoria=Categoria.id_categoria WHERE id_producto=? ");
        $sentencia->execute(array($id));
        $Producto=$sentencia->fetch(PDO::FETCH_OBJ);
        return $Producto;
    }

    //modifica una serie
    function editarCel($nombre,$precio,$caracteristicas,$stock,$id_categoria){
        $sentencia=$this->db->prepare("UPDATE producto SET nombre=?,precio=?,caracteristicas=?,stock=?,id_marca=? WHERE id_producto=? ");
        $sentencia->execute(array($nombre,$precio,$caracteristicas,$stock,$id_categoria));
    }
    //busca todas las series por un genero
    function getSerieGen($genero){
        $sentencia=$this->db->prepare("SELECT*FROM Producto INNER JOIN marca ON Producto.id_categoria=Categoria.id_categoria WHERE Categoria.marcaNom=?");
        $sentencia->execute(array($genero));
        $celulares=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $celulares;
    }


}