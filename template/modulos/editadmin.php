<?php
if(!empty($_POST['txtnombre']) && !empty($_POST['txtcorreo'])){
    require '../global/sesiones.php';
    require '../global/cn.php';

    $id= filter_var($_POST['txtid']);
    $nombre= filter_var($_POST['txtnombre']);
    $correo= filter_var($_POST['txtcorreo']);

    //ACTUALIZA FOTO ADMINS

    $consulta = $mysqli->prepare ("SELECT foto FROM tblusuarios WHERE id = '$id' ");
    $consulta->execute();
    $resultado = $consulta->get_result();
    $row = $resultado->fetch_assoc();

    $extension = '';
    $ruta ='images/admin';
    $archivo = $_FILES['txtfoto']['tmp_name'];
    $nombre_archivo = $_FILES['txtfoto']['name'];
    $info = pathinfo($nombre_archivo);

    if ($archivo != ''){

        $extension=$info['extension'];
        if ($extension == "jpg" || $extension== "JPG" || $extension == 'JPEG' || $extension == 'jpeg'){

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

            $nombre2 = str_replace(' ', '-', $nombre);
            $nombre_archivo = $nombre2.'.'.$extension;

            move_uploaded_file($archivo, '../'.$ruta.'/'.$nombre_archivo);
            $ruta = $ruta."/".$nombre_archivo;

        }else{
            echo'<script type="text/javascript">
            alert("Error formato de foto");
            window.location.href="../vistanuevoadmin.php";
            </script>';
            exit;
        }
        $consulta1= $mysqli->prepare ("UPDATE tblusuarios SET foto = '$ruta' WHERE id = '$id' ");
        $resultado1 = $consulta1->get_result();
        $consulta1->execute();
    }

    $consulta2 = $mysqli->prepare ("UPDATE tblusuarios SET nombre = '$nombre', correo = '$correo' WHERE id = '$id' ");
    $resultado2 = $consulta2->get_result();
    if($consulta2->execute()){
        echo'<script type="text/javascript">
        alert("Registro modificado");
        window.location.href="../vistanuevoadmin.php";
        </script>';
        $mysqli->close();
    }else{
        echo'<script type="text/javascript">
        alert("Error al modificar los datos, revisarlos nuevamente");
        window.location.href="../vistanuevoadmin.php";
        </script>';
    }
}
?>