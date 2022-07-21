<?php
if(!empty($_POST['txtnombre']) && !empty($_POST['txtmatricula'])){
    require '../global/cn.php';

    $nombre= filter_var($_POST['txtnombre']);
    $matricula= filter_var($_POST['txtmatricula']);
    date_default_timezone_set('America/Mexico_City');
    $fecha = date('Y-m-d');
    $fechahoy = date('Y-m-d');
    $hora = date('h:i:s a');

    $consulta = $mysqli->prepare ("SELECT tutor, fecha_retiro, hora FROM retiroalm WHERE matricula = '$matricula' AND fecha = '$fecha' ");
    $consulta->execute();
    $resultado = $consulta->get_result();
    $row = $resultado->fetch_assoc();

    if(empty($row['fecha_retiro'])){      
        //consultas
    $mysqli->set_charset('utf8');
    $consulta1 = $mysqli->prepare ("INSERT INTO retiroalm (matricula,tutor,fecha,fecha_retiro,hora) VALUES (?,?,?,?,?)");
    $consulta1->bind_param('sssss', $matricula, $nombre, $fecha, $fecha, $hora); 
    $consulta1->execute();
    echo'<script type="text/javascript">
    alert("Alumno retirado del colegio por el tutor '.$nombre.' a las '.$hora.' ");
    window.location.href="../readqr.php";
    </script>';
    $mysqli->close();       
    }else{
        if($row['fecha_retiro'] == $fechahoy){    
        echo'<script type="text/javascript">
        alert("El alumno ya fue retirado el dia de hoy '.$fechahoy.' por el Tutor '.$row['tutor'].' a las '.$row['hora'].'");
        window.location.href="../readqr.php";
        </script>';       
        }
}    
}else{
    echo'<script type="text/javascript">
        alert("No se registro salida del alumno con el tutor seleccionado");
        window.location.href="../readqr.php";
        </script>';
}
?>