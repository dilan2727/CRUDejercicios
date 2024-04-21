<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Modificar Ejercicio</title>
</head>

<body>
    <?php
    include "config/conexion.php";
    $Id_ejercicio = $_REQUEST['Id_ejercicio'];

    $sql = "SELECT * FROM ejercicios WHERE Id_ejercicio = $Id_ejercicio";
    $resultado = $conexion->query($sql);

    $Fila = $resultado->fetch_assoc();
    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Ejercicio</h1>
        </center>
        <form action="EditarEjercicio.php?Id_ejercicioEditar= <?php echo $Fila["Id_ejercicio"]?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="NombreEjercicio" value="<?php echo $Fila['Nombre']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="DescripcionEjercicio" value="<?php echo $Fila['Descripcion']?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tren</label>
                <input type="text" class="form-control" name="TrenEjercicio" value="<?php echo $Fila['Tren']?>">
            </div>

            <img style="width: 100px;" src="data:image/jpg;base64, <?php 
                            echo base64_encode($Fila['Imagen'])?>" alt="">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                <input type="File" class="form-control" name="ImagenEjercicio">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="Index.php" class="btn btn-info">Regresar</a>
        </form>

    </div>
</body>

</html>