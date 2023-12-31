<?php

class conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contrasenia="micontra";
    private $conection;

    public function __construct(){
        try{

            $this->conection=new PDO("mysql:host=localhost;port=3307;dbname=diccionario", $this->usuario, $this->contrasenia);
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $PE){
            echo "Errorde Conexión: No pudo conectarse. ".$PE->getMessage();
        }
    }

    public function ejecutar($sql){ //insert, update, delete
        $this->conection->exec($sql);
        return $this->conection->lastInsertId();
    }

    public function consultar($sql){
        $resultSql=$this->conection->prepare($sql);
        $resultSql->execute();
        return $resultSql->fetchAll();
    }
}

?>