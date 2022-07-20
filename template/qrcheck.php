<?php
include 'global/cn.php';
include 'hash.php';

$qr= $_POST['qr'];
$arraydatos= array();
$indice = 0;
$matricula = protect::desencrypt($qr);

if ($matricula != '') {
    $consulta = $mysqli->prepare ("SELECT * FROM alm a INNER JOIN papas b on a.matricula = b.matricula WHERE b.matricula = '$matricula'");
    $consulta->execute();
    $resultado = $consulta->get_result();
    $row = $resultado-> fetch_assoc();
    echo json_encode($row);

} else {
    echo json_encode(array('error'=>'No hay datos'));
}
?>