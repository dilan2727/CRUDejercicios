<?php


include "config/conexion.php";

$Id_rutina = $_REQUEST['Id_rutinaEditar'];

$Nombre =$_POST['NombreRutina'];
$Descripcion =$_POST['DescripcionRutina'];
$Duracion =$_POST['DuracionRutina'];
$Nivel =$_POST['NivelRutina'];



$sql = "UPDATE ejercicios SET
Nombre = '$Nombre',
Descripcion = '$Descripcion',
Duracion = '$Duracion',
Nivel =$Nivel  WHERE Id_rutina = $Id_rutina";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header('location: Index.php');
}else {
    echo "No se edito el ejercicio";
}
