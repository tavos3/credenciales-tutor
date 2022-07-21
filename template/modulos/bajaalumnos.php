<?php
include ("../global/sesiones.php");

require '../global/cn.php';
$matricula=$_POST['matricula'];

//eliminar foto de la carpeta alumnos
$consulta = $mysqli->prepare ("SELECT foto FROM alm WHERE matricula = '$matricula' ");
    $consulta->execute();
	$resultado = $consulta->get_result();
	$row = $resultado->fetch_assoc();
	if(
		// Se obtuvo un resultado de la consulta
		isset($row['foto'])
		// Y hay una imagen previa
		&& $row['foto'] != ''
		// Y no es la predeterminada, solo ajusta ruta y nombre
		&& $row['foto'] != 'images/default/user.jpg'
	){
		if(file_exists('../'.$row['foto'])){
			unlink('../'.$row['foto']);
		}
	}
//eliminar fotos de la carpeta tutores
$consulta1 = $mysqli->prepare ("SELECT foto1, foto2, foto3 FROM papas WHERE matricula = '$matricula' ");
	$consulta1->execute();
	$resultado1 = $consulta1->get_result();
	$row1 = $resultado1->fetch_assoc();

	if(
		// Se obtuvo un resultado de la consulta
		isset($row1['foto1'])
		// Y hay una imagen previa
		&& $row1['foto1'] != ''
		// Y no es la predeterminada, solo ajusta ruta y nombre
		&& $row1['foto1'] != 'images/default/user.jpg'
	){
		if(file_exists('../'.$row1['foto1'])){
			unlink('../'.$row1['foto1']);
		}
	}
	if(
		// Se obtuvo un resultado de la consulta
		isset($row1['foto2'])
		// Y hay una imagen previa
		&& $row1['foto2'] != ''
		// Y no es la predeterminada, solo ajusta ruta y nombre
		&& $row1['foto2'] != 'images/default/user.jpg'
	){
		if(file_exists('../'.$row1['foto2'])){
			unlink('../'.$row1['foto2']);
		}
	}
	if(
		// Se obtuvo un resultado de la consulta
		isset($row1['foto3'])
		// Y hay una imagen previa
		&& $row1['foto3'] != ''
		// Y no es la predeterminada, solo ajusta ruta y nombre
		&& $row1['foto3'] != 'images/default/user.jpg'
	){
		if(file_exists('../'.$row1['foto3'])){
			unlink('../'.$row1['foto3']);
		}
	}
//eliminar qr de tutores de la carpeta
$consulta2 = $mysqli->prepare ("SELECT qr1, qr2, qr3 FROM papas WHERE matricula = '$matricula' ");
	$consulta2->execute();
	$resultado2 = $consulta2->get_result();
	$row2 = $resultado2->fetch_assoc();

	if(isset($row2['qr1'])){
        if(file_exists('../'.$row2['qr1'])){
            unlink('../'.$row2['qr1']);
        }
	}
		if(isset($row2['qr2'])){
			if(file_exists('../'.$row2['qr2'])){
				unlink('../'.$row2['qr2']);
			}
		}
			if(isset($row2['qr3'])){
				if(file_exists('../'.$row2['qr3'])){
					unlink('../'.$row2['qr3']);
				}
			}
	
$mysqli->set_charset('utf8');
$consulta4 = $mysqli->prepare ("DELETE FROM alm WHERE matricula = '$matricula' ");
$consulta5 = $mysqli->prepare ("DELETE FROM papas WHERE matricula = '$matricula' ");
$consulta6 = $mysqli->prepare ("DELETE FROM retiroalm WHERE matricula = '$matricula' ");
	
if($consulta4->execute()){
	$consulta5->execute();
	$consulta6->execute();
	echo'<script type="text/javascript">
	alert("Registros del alumno seleccionado eliminados con exito");
		window.location.href="../vistapanel.php";
	</script>';
	$mysqli->close();
}else{
	echo'<script type="text/javascript">
	alert("Error al intentar eliminar registros del alumno seleccionado");
	window.location.href="../vistapanel.php";
	</script>';
}