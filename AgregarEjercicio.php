<?php

include "config/conexion.php";

$nombreejercicio =$_POST["Nombre"];
$descripcionejercicio =$_POST["Descripcion"];
$Tren =$_POST["Tren"];
$imagen =addslashes(file_get_contents($_FILES["Imagen"]['tmp_name']));

$sql = "INSERT INTO `ejercicios` (Nombre , Descripcion , Tren , Imagen) 
VALUES ('$nombreejercicio','$descripcionejercicio','$Tren','$imagen')";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header('location: Index.php');
}else {
    echo "no se insertaron los datos";
}
