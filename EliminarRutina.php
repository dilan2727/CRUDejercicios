<?php

include "config/conexion.php";

$Id_rutina= $_REQUEST['Id_rutina'];

$sql ="DELETE FROM rutinas WHERE Id_rutina = $Id_rutina";

$resultado = $conexion -> query($sql);

if ($resultado) {
    header("location: Index.php");
}else{
    echo"no se elimino el ejercicio";
}