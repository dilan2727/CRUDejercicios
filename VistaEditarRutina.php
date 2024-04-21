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
    $Id_rutina = $_REQUEST['Id_rutina'];

    $sql = "SELECT * FROM rutinas WHERE Id_rutina = $Id_rutina";
    $resultado = $conexion->query($sql);

    $Fila = $resultado->fetch_assoc();
    ?>

    <div class="container">
        <br>
        <center>
            <h1>Modificar Rutina</h1>
        </center>
        <form action="EditarRutina.php?Id_rutinaEditar= <?php echo $Fila["Id_rutina"] ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Rutina</label>
                <input type="text" class="form-control" name="NombreRutina" value="<?php echo $Fila['Nombre'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="DescripcionRutina" value="<?php echo $Fila['Descripcion'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Duracion</label>
                <input type="text" class="form-control" name="DuracionRutina" value="<?php echo $Fila['Duracion'] ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nivel</label>
                <input type="text" class="form-control" name="NivelRutina" value="<?php echo $Fila['Nivel'] ?>">
            </div>
            <br>
            <br>
            <center>
                <button type="submit" class="btn btn-success">Enviar</button>
                <a href="Index.php" class="btn btn-warning">Regresar</a>
            </center>
        </form>

    </div>
</body>

</html>