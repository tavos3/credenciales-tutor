<?php
include ("../global/sesiones.php");
require '../global/cn.php';

$mysqli->set_charset('utf8');
    $consulta1 = $mysqli->prepare ("DELETE FROM retiroalm");
        
    if($consulta1->execute()){
        echo'<script type="text/javascript">
        alert("Todos los registros de retiros de alumnos fueron eliminados con exito");
            window.location.href="../vistapanel.php";
        </script>';
        $mysqli->close();
    }else{
        echo'<script type="text/javascript">
        alert("Error al intentar eliminar todos los registros de retiros de alumnos");
        window.location.href="../vistapanel.php";
        </script>';
    }
?>