<?php
include ("global/cn.php");
$mysqli->set_charset('utf8');

date_default_timezone_set('America/Mexico_City');
$fecha = date('Y-m-d');
$consulta = $mysqli->prepare ("SELECT * from retiroalm a INNER JOIN alm b on a.matricula = b.matricula WHERE a.fecha_retiro = '$fecha'");
$consulta->execute();
$resultado = $consulta->get_result();