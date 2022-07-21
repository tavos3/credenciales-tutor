<?php
include ("../global/sesiones.php");

require '../global/cn.php';
$id=$_POST['id'];

//eliminar foto de la carpeta admin
$consulta = $mysqli->prepare ("SELECT foto FROM tblusuarios WHERE id = '$id' ");
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

    $mysqli->set_charset('utf8');
    $consulta1 = $mysqli->prepare ("DELETE FROM tblusuarios WHERE id = '$id' ");
        
    if($consulta1->execute()){
        echo'<script type="text/javascript">
        alert("Admin seleccionado eliminado con exito");
            window.location.href="../vistapanel.php";
        </script>';
        $mysqli->close();
    }else{
        echo'<script type="text/javascript">
        alert("Error al intentar eliminar el Admin seleccionado");
        window.location.href="../vistapanel.php";
        </script>';
    }
?>