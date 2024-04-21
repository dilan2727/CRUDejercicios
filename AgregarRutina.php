<?php

include "config/conexion.php";

$nombrerutina =$_POST["Nombre"];
$descripcionrutina =$_POST["Descripcion"];
$duracionrutina =$_POST["Duracion"];
$nivelrutina =$_POST["Nivel"];


$sql = "INSERT INTO `rutinas` (Nombre , Descripcion , Duracion , Nivel) 
VALUES ('$nombrerutina','$descripcionrutina','$duracionrutina','$nivelrutina')";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header('location: Index.php');
}else {
    echo "no se insertaron los datos";
}
