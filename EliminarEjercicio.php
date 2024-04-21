<?php

include "config/conexion.php";

$Id_ejercicio = $_REQUEST['Id_ejercicio'];

$sql ="DELETE FROM ejercicios WHERE Id_ejercicio = $Id_ejercicio";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header("location: Index.php");
}else{
    echo"no se elimino el ejercicio";
}