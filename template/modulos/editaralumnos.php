<?php
require "phpqrcode/qrlib.php";  
require "hash.php"; 

if(!empty($_POST['txtnombre']) && !empty($_POST['txtcorreo'])){
    require '../global/sesiones.php';
    require '../global/cn.php';

$id = $_POST['txtid'];
$nombre11= filter_var($_POST['txtnombre']);
$nombre = str_replace("Ñ", "N", $nombre11);
$matricula= filter_var($_POST['txtmatricula']);
$correo= filter_var($_POST['txtcorreo']);
$grado= filter_var($_POST['txtgrado']);
$grupo= filter_var($_POST['txtgrupo']);
$ciclo= filter_var($_POST['txtciclo']);
$nivel= filter_var($_POST['txtnivel']);
$tutor11= filter_var($_POST['txttutor1']);
$tutor1 = str_replace("Ñ", "N", $tutor11);
$tutor22= filter_var($_POST['txttutor2']);
$tutor2 = str_replace("Ñ", "N", $tutor22);
$tutor33= filter_var($_POST['txttutor3']);
$tutor3 = str_replace("Ñ", "N", $tutor33);

//ACTUALIZA FOTO ALUMNOS Y TUTORES

$consulta2 = $mysqli->prepare ("SELECT foto FROM alm WHERE matricula = '$matricula' ");
$consulta2->execute();
$resultado2 = $consulta2->get_result();
$row = $resultado2->fetch_assoc();

$extension = '';
$ruta ='images/alumnos/'.$nivel.'/'.$grado.'/'.$grupo;
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

        $nombre01 = str_replace(" ", "-", $nombre);
        $nombre_archivo = $matricula.'-'.$nombre01.'.'.$extension;

        move_uploaded_file($archivo, '../'.$ruta.'/'.$nombre_archivo);
        $ruta = $ruta."/".$nombre_archivo;

    }else{
        header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
        exit;
    }
    $consulta1= $mysqli->prepare ("UPDATE alm SET foto = '$ruta' WHERE matricula = '$matricula' ");
    $resultado1 = $consulta1->get_result();
    $consulta1->execute();
}
//foto tutor 1
$consulta4 = $mysqli->prepare ("SELECT foto1 FROM papas WHERE matricula = '$matricula' ");
$consulta4->execute();
$resultado4 = $consulta4->get_result();
$row4 = $resultado4->fetch_assoc();

$extension1 = '';
    $ruta1 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo1 = $_FILES['txtfoto1']['tmp_name'];
    $nombre_archivo1 = $_FILES['txtfoto1']['name'];
    $info1 = pathinfo($nombre_archivo1);

if ($archivo1 != ''){

    $extension1=$info1['extension'];
    if ($extension1 == "jpg" || $extension1== "JPG" || $extension1 == 'JPEG' || $extension1 == 'jpeg'){

        if(
            // Se obtuvo un resultado de la consulta
            isset($row4['foto1'])
            // Y hay una imagen previa
            && $row4['foto1'] != ''
            // Y no es la predeterminada, solo ajusta ruta y nombre
            && $row4['foto1'] != 'images/default/user.jpg'
        ){
            if(file_exists('../'.$row4['foto1'])){
                unlink('../'.$row4['foto1']);
            }
        }

        $tutor01 = str_replace(" ", "-", $tutor1);
        $nombre_archivo1 = $matricula.'-'.$tutor01.'.'.$extension1;

    
        move_uploaded_file($archivo1, '../'.$ruta1.'/'.$nombre_archivo1);
        $ruta1 = $ruta1."/".$nombre_archivo1;

    }else{
        header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
        exit;
    }
    $consulta5= $mysqli->prepare ("UPDATE papas SET foto1 = '$ruta1' WHERE matricula = '$matricula' ");
    $resultado5 = $consulta5->get_result();
    $consulta5->execute();
}
//foto tutor 2
$consulta6 = $mysqli->prepare ("SELECT foto2 FROM papas WHERE matricula = '$matricula' ");
$consulta6->execute();
$resultado6 = $consulta6->get_result();
$row5 = $resultado6->fetch_assoc();

$extension2 = '';
    $ruta2 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo2 = $_FILES['txtfoto2']['tmp_name'];
    $nombre_archivo2 = $_FILES['txtfoto2']['name'];
    $info2 = pathinfo($nombre_archivo2);

if ($archivo2 != ''){

    $extension2=$info2['extension'];
    if ($extension2 == "jpg" || $extension2== "JPG" || $extension2 == 'JPEG' || $extension2 == 'jpeg'){

        if(
            // Se obtuvo un resultado de la consulta
            isset($row5['foto2'])
            // Y hay una imagen previa
            && $row5['foto2'] != ''
            // Y no es la predeterminada, solo ajusta ruta y nombre
            && $row5['foto2'] != 'images/default/user.jpg'
        ){
            if(file_exists('../'.$row5['foto2'])){
                unlink('../'.$row5['foto2']);
            }
        }

        $tutor02 = str_replace(" ", "-", $tutor2);
        $nombre_archivo2 = $matricula.'-'.$tutor02.'.'.$extension2;
    
        move_uploaded_file($archivo2, '../'.$ruta2.'/'.$nombre_archivo2);
        $ruta2 = $ruta2."/".$nombre_archivo2;

    }else{
        header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
        exit;
    }
    $consulta7= $mysqli->prepare ("UPDATE papas SET foto2 = '$ruta2' WHERE matricula = '$matricula' ");
    $resultado7 = $consulta7->get_result();
    $consulta7->execute();
}
//foto tutor 3
$consulta8 = $mysqli->prepare ("SELECT foto3 FROM papas WHERE matricula = '$matricula' ");
$consulta8->execute();
$resultado8 = $consulta8->get_result();
$row6 = $resultado8->fetch_assoc();

$extension3 = '';
    $ruta3 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo3 = $_FILES['txtfoto3']['tmp_name'];
    $nombre_archivo3 = $_FILES['txtfoto3']['name'];
    $info3 = pathinfo($nombre_archivo3);

if ($archivo3 != ''){

    $extension3=$info3['extension'];
    if ($extension3 == "jpg" || $extension3== "JPG" || $extension3 == 'JPEG' || $extension3 == 'jpeg'){

        if(
            // Se obtuvo un resultado de la consulta
            isset($row6['foto3'])
            // Y hay una imagen previa
            && $row6['foto3'] != ''
            // Y no es la predeterminada, solo ajusta ruta y nombre
            && $row6['foto3'] != 'images/default/user.jpg'
        ){
            if(file_exists('../'.$row6['foto3'])){
                unlink('../'.$row6['foto3']);
            }
        }

        $tutor03 = str_replace(" ", "-", $tutor3);
        $nombre_archivo3 = $matricula.'-'.$tutor03.'.'.$extension3;
    
        move_uploaded_file($archivo3, '../'.$ruta3.'/'.$nombre_archivo3);
        $ruta3 = $ruta3."/".$nombre_archivo3;

    }else{
        header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
        exit;
    }
    $consulta8= $mysqli->prepare ("UPDATE papas SET foto3 = '$ruta3' WHERE matricula = '$matricula' ");
    $resultado8 = $consulta8->get_result();
    $consulta8->execute();
}

//ACTUALIZA QR TUTORES

    $consulta9 = $mysqli->prepare ("SELECT qr1, qr2, qr3 FROM papas WHERE matricula = '$matricula' ");
    $consulta9->execute();
    $resultado9 = $consulta9->get_result();
    $row7 = $resultado9->fetch_assoc();

    //CODIGO QR TUTOR1
    if(isset($row7['qr1'])){
        if(file_exists('../'.$row7['qr1'])){
            unlink('../'.$row7['qr1']);
        }
    
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;
    $content = protect::encrypt($matricula, $tutor1);
    $espacio = str_replace(" ", "-", $tutor1);
    $filename = '../'.$dir.'/'.$espacio.'-'.$matricula.'.png'; 
    $level = 'H';
    $size = 10;
    $frameSize = 3;            
    QRcode::png($content, $filename, $level, $size, $frameSize); 
    $filename =$dir."/".$espacio.'-'.$matricula.'.png';
    }

    //CODIGO QR TUTOR2
    if(isset($row7['qr2'])){
        if(file_exists('../'.$row7['qr2'])){
            unlink('../'.$row7['qr2']);
        }
    
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;  
    $content2 = protect::encrypt($matricula, $tutor2);
    $espacio2 = str_replace(" ", "-", $tutor2);
    $filename2 = '../'.$dir.'/'.$espacio2.'-'.$matricula.'.png';            
    QRcode::png($content2, $filename2, $level, $size, $frameSize); 
    $filename2 =$dir."/".$espacio2.'-'.$matricula.'.png';
    }

    //CODIGO QR TUTOR3
    if(isset($row7['qr3'])){
        if(file_exists('../'.$row7['qr3'])){
            unlink('../'.$row7['qr3']);
        }
    
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;  
    $content3 = protect::encrypt($matricula, $tutor3);
    $espacio3 = str_replace(" ", "-", $tutor3);
    $filename3 = '../'.$dir.'/'.$espacio3.'-'.$matricula.'.png';           
    QRcode::png($content, $filename3, $level, $size, $frameSize); 
    $filename3 =$dir."/".$espacio3.'-'.$matricula.'.png';
    }

    
$consulta = $mysqli->prepare ("UPDATE alm SET nombre = '$nombre', matricula = '$matricula', correo = '$correo',grado = '$grado',grupo = '$grupo',ciclo = '$ciclo', nivel = '$nivel' WHERE matricula = '$matricula' ");
$resultado = $consulta->get_result();
$consulta3 = $mysqli->prepare ("UPDATE papas SET matricula = '$matricula', nombre1 = '$tutor1', nombre2 = '$tutor2', nombre3 = '$tutor3', qr1 = '$filename', qr2 = '$filename2', qr3 = '$filename3' WHERE matricula = '$matricula'");
$resultado3 = $consulta3->get_result();
if($consulta->execute()){
    $consulta3->execute();
    echo'<script type="text/javascript">
    alert("Registro modificado");
    window.location.href="../vistapanel.php";
    </script>';
    $mysqli->close();
}else{
    echo'<script type="text/javascript">
    alert("Error al modificar los datos, revisarlos nuevamente");
    window.location.href="../vistapanel.php";
    </script>';
}

}else{
    echo'<script type="text/javascript">
        alert("Por favor introducir todos los campos");
        window.location.href="../vistaeditarcredencial.php";
        </script>';
}
?>