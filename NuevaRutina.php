<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Nuevo Ejercicio</title>
</head>

<body>
    <?php
    include "config/conexion.php";
    ?>
    <div class="container">
        <br>
        <center>
            <h1>Nueva Rutina</h1>
        </center>
        <br>
        <form action="AgregarRutina.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre Rutina</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="Descripcion">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Duracion</label>
                <input type="text" class="form-control" name="Duracion">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Nivel</label>
                <input type="text" class="form-control" name="Nivel">
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