<?php


class conexion{

    private $servidor="localhost";
    private $usuario = "root";
    private $contraseña="";
    private $conexion; //Contenera toda la informacion de la base datos

    public function __construct(){

        try {
            $this->conexion=new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contraseña);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            return "falla de conexion".$e;
        }
    }

    //Metodo para insertar, modificar, o eliminar
    public function ejecutar($sql){

        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId(); //nos retorna el ID
    }

    //Consultar datos directamente de la base de datos;
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll(); //retorna todos los recursos de la sentencia sql.

    }
}



?>