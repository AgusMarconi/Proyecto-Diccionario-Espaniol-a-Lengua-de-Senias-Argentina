<?php

include("../CodigoPHP/cabecera.php");
//include("../codigoPHP/conexion.php");

if ($_POST){
    //print_r($_POST);
    $conectar=new conexion();
    //print_r($_FILES['foto']);
    //print_r($_FILES['video']);

    $nombre=$_POST['nombre'];
    $dicc=$_POST['descripcion'];
    $img=$_FILES['foto']['name'];
    $video=$_FILES['video']['name'];
    $sql="INSERT INTO `palabra` (`nombre`, `descripcion`, `video`, `imagen`) 
    VALUES ('$nombre', '$dicc', '$video', '$img');";
    $conectar->ejecutar($sql);
}

?>

<div class="container">
    <div class="row">
    <div class="col-md-2">
            
            </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Agregando una Seña al diccionario
                </div>
                <div class="card-body">
                    <div>
                        <form action="subirPalabra.php" enctype="multipart/form-data" method="POST">
                            <div class="imagen_jpg">
                                <h5>Imagen</h5>
                                <input class="form-control" type="file" name="foto" id="">
                            </div>
                            
                            <div class="video_mp4">
                                <h5>Video</h5>
                                <input class="form-control" type="file" name="video" id="">
                            </div>
                            <div class="conteinerReg">
                                <h5>Palabra: </h5>
                                <input class="form-control" type="text" required name="nombre" id="">
                                <br>
                                <h5>Descripción: </h5>
                                <input class="form-control" type="text" required name="descripcion" id="">
                                <br>
                                <button class="btn btn-success" type="submit">Subir palabra</button>
                            </div>
                            <input type="submit" value="">
                        </form>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    
                </div>
            </div>
            
        </div>
        <div class="col-md-2">
            
        </div>
    </div>
</div>



<?php
include("../CodigoPHP/pie.php")
?>