<?php
include ("global/sesiones.php");
include ("global/cn.php");


$mysqli->set_charset('utf8');

    $consulta1 = $mysqli->prepare ("SELECT count(*) nivel FROM alm WHERE nivel='preescolar'");
    $consulta1->execute();
    $resultado1 = $consulta1->get_result();
    $total1 = $resultado1->fetch_assoc();
    $nivel1=$total1['nivel'];

    $consulta2 = $mysqli->prepare ("SELECT count(*) nivel FROM alm WHERE nivel='primaria'");
    $consulta2->execute();
    $resultado2 = $consulta2->get_result();
    $total2 = $resultado2->fetch_assoc();
    $nivel2=$total2['nivel'];

    $consulta3 = $mysqli->prepare ("SELECT count(*) nivel FROM alm WHERE nivel='secundaria'");
    $consulta3->execute();
    $resultado3 = $consulta3->get_result();
    $total3 = $resultado3->fetch_assoc();
    $nivel3=$total3['nivel'];

    $consulta4 = $mysqli->prepare ("SELECT count(*) nivel FROM alm WHERE nivel='preparatoria'");
    $consulta4->execute();
    $resultado4 = $consulta4->get_result();
    $total4 = $resultado4->fetch_assoc();
    $nivel4=$total4['nivel'];

    $consulta5 = $mysqli->prepare ("SELECT * from alm a INNER JOIN papas b on a.matricula = b.matricula;");
    $consulta5->execute();
    $resultado5 = $consulta5->get_result();

    $consulta6 = $mysqli->prepare ("SELECT count(*) nivel FROM alm");
    $consulta6->execute();
    $resultado6 = $consulta6->get_result();
    $total6 = $resultado6->fetch_assoc();
    $nivel6=$total6['nivel'];

    $consulta7 = $mysqli->prepare ("SELECT * FROM retiroalm");
    $consulta7->execute();
    $resultado7 = $consulta7->get_result();



