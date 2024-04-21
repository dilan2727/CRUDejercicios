<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <div class="class">
        
        <br>
        <center>
            <h1>Lista de ejercicios</h1>
        </center>
        <br>
        <div class="container">
        
            <a href="NuevoEjercicio.php" class="btn btn-dark">Agregar nuevo ejercicio</a>
            <hr>
            <table class="table table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Tren</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include "config/conexion.php";

                    $sql = "SELECT * FROM ejercicios";
                    $resultado = $conexion->query($sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>
                        <tr>
                            <th scope="row"><?php echo $Fila['Id_ejercicio']; ?></th>
                            <td><?php echo $Fila['Nombre']; ?></td>
                            <td><?php echo $Fila['Descripcion']; ?></td>
                            <td><?php echo $Fila['Tren']; ?></td>
                            <td><img style="width: 100px;" src="data:image/jpg;base64, <?php
                                                                                        echo base64_encode($Fila['Imagen']) ?>" alt=""></td>
                            <td>
                                <a href="VistaEditar.php?Id_ejercicio=<?php echo $Fila["Id_ejercicio"] ?>" class="btn btn-warning">Editar</a>
                                <br>
                                <br>
                                <a href="EliminarEjercicio.php?Id_ejercicio=<?php echo $Fila["Id_ejercicio"] ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
            <br>
            <center>
                <h1>Rutinas</h1>
            </center>
            <br>
            <div class="container">
                <a href="NuevaRutina.php" class="btn btn-success">Agregar nueva rutina</a>
                <hr>
                <table class="table table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Duracion</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "config/conexion.php";

                        $sql = "SELECT * FROM rutinas";
                        $resultado = $conexion->query($sql);

                        while ($Fila = $resultado->fetch_assoc()) { ?>

                            <tr>
                                <th scope="row"><?php echo $Fila['Id_rutina']; ?></th>
                                <td><?php echo $Fila['Nombre']; ?></td>
                                <td><?php echo $Fila['Descripcion']; ?></td>
                                <td><?php echo $Fila['Duracion']; ?></td>
                                <td><?php echo $Fila['Nivel']; ?></td>
                                <td>
                                    <a href="VistaEditarRutina.php?Id_rutina=<?php echo $Fila["Id_rutina"] ?>" class="btn btn-warning">Editar</a>
                            <br>
                            <br>
                                    <a href="EliminarRutina.php?Id_rutina=<?php echo $Fila["Id_rutina"] ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>












                    </tbody>
                <?php } ?>
                </table>

            </div>


        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>