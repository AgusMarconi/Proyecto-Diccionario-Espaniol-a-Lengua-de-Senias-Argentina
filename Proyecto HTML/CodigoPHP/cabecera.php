<?php 
include("conexion.php");
$conectar=new conexion();
if (count($_POST)<=1){
    if ($_POST){
        //print_r($_POST);
        $nombre=$_POST['buscar'];
        $palabras=$conectar->consultar("SELECT * FROM palabra WHERE '$nombre'= nombre");
        //$conectar->ejecutar($sql);
        header("../Paginas/subirPalabra.php");
    }else{
        $palabras=$conectar->consultar("SELECT * FROM palabra");
    }
    
}
?>

<!DOCTYPE html>
<html lang="Español">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos-pag/estilo.css">
    <title>Diccionario Español a LSA</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="titulo_principal"><a href="../Paginas/index.php">
        <h1>Diccionario Español a Lengua de Señas Argentina</h1>
        <img src="../Estilos-pag/libro logo.png" id="logo_pagina">
    </a></div>
    <div class="encabezado">
        <form class="buscador" action="../Paginas/index.php" method="post" target="_blank">
            <button type="submit" class="boton1" value="BOTON">
                <img src="../Estilos-pag/icon-buscar.png" alt="">
            </button>
            <input type="text" name="buscar" id="buscar_palabra" placeholder="Ingrese la palabra a buscar.">
        </form>
        <div class="opciones">
            <nav class="rueda">
                <label for="check" class="checkbtn">
                    <img src="../Estilos-pag/icon-navicon.png" alt="" class="icono">
                </label>
            </nav>
            <ul class="lista">
                <li><a href="../Paginas/presentacion.php">Presentación</a></li>
                <li><a href="">Contacto</a></li>
                <li><a href="">Inicio Sesión</a></li>
                <li><a href="">Numeros</a></li>
                <li><a href="../Paginas/subirPalabra.php">Agregar Palabra</a></li>
            </ul>
        </div>
    </div>

