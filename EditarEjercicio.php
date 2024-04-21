<?php


include "config/conexion.php";

$Id_ejercicio = $_REQUEST['Id_ejercicioEditar'];

$Nombre =$_POST['NombreEjercicio'];
$Descripcion =$_POST['DescripcionEjercicio'];
$Tren =$_POST['TrenEjercicio'];
$imagen = addslashes(file_get_contents($_FILES['ImagenEjercicio']['tmp_name']));

$sql = "UPDATE ejercicios SET
Nombre = '$Nombre',
Descripcion = '$Descripcion',
Tren = '$Tren',
Imagen = '$imagen'  WHERE Id_ejercicio = $Id_ejercicio";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header('location: Index.php');
}else {
    echo "No se edito el ejercicio";
}
