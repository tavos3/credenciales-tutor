<?php
include ("global/cn.php");
include ("global/sesiones.php");

$consulta = $mysqli->prepare ("SELECT * FROM tblusuarios");
    $consulta->execute();
    $resultado = $consulta->get_result();