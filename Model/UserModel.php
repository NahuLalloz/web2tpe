<?php


class UserModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=web2;charset=utf8','root','');
    }

    function obtenerContra($mail){
        $sentencia=$this->db->prepare("SELECT * FROM usuario WHERE mail=?");
        $sentencia->execute(array($mail));
        $usuario=$sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    function GetUsuario($user){
        $sentencia = $this->db->prepare( "SELECT user FROM usuario WHERE mail = ?");
        $sentencia->execute(array($mail));
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    function añadirUsuario($email,$contraseña){
        $sentencia=$this->db->prepare("INSERT INTO usuario (email, contraseña) VALUE (?,?)");
        $sentencia->execute(array($email,$contraseña));
    }

}