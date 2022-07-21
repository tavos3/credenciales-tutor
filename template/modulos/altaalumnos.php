<?php
require "phpqrcode/qrlib.php";  
require "hash.php"; 

if(!empty($_POST['txtnombre']) && !empty($_POST['txtcorreo'])){
    require '../global/sesiones.php';
    require '../global/cn.php';

    $nombre11= filter_var($_POST['txtnombre']);
    $nombre = str_replace("Ñ", "N", $nombre11);
    $matricula= filter_var($_POST['txtmatricula']);
    $correo= filter_var($_POST['txtcorreo']);
    $nivel= filter_var($_POST['txtnivel']);
    $grado= filter_var($_POST['txtgrado']);
    $grupo= filter_var($_POST['txtgrupo']);
    $ciclo= filter_var($_POST['txtciclo']);
    $tutor11= filter_var($_POST['txttutor1']);
    $tutor1 = str_replace("Ñ", "N", $tutor11);
    $tutor22= filter_var($_POST['txttutor2']);
    $tutor2 = str_replace("Ñ", "N", $tutor22);
    $tutor33= filter_var($_POST['txttutor3']);
    $tutor3 = str_replace("Ñ", "N", $tutor33);


    //FOTOS ALUMNO Y TUTORES

    $extension = '';
    $ruta = 'images/alumnos/'.$nivel.'/'.$grado.'/'.$grupo;          
    $archivo = $_FILES['txtfoto']['tmp_name'];
    $nombre_archivo = $_FILES['txtfoto']['name'];
    $info = pathinfo($nombre_archivo);

    if ($archivo != ''){

        $extension=$info['extension'];
        if ($extension == "jpg" || $extension== "JPG" || $extension == 'JPEG' || $extension == 'jpeg'){
            
            $nombre01 = str_replace(" ", "-", $nombre);
            $nombre_archivo = $matricula.'-'.$nombre01.'.'.$extension;

            move_uploaded_file($archivo, '../'.$ruta.'/'.$nombre_archivo);
            $ruta = $ruta."/".$nombre_archivo;

        }else{
            header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
            exit;
        }
     
    }else {
        $ruta="images/default/user.jpg";
    }


    $extension1 = '';
    $ruta1 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo1 = $_FILES['txtfototutor1']['tmp_name'];
    $nombre_archivo1 = $_FILES['txtfototutor1']['name'];
    $info1 = pathinfo($nombre_archivo1);

    if ($archivo1 != ''){

        $extension1=$info1['extension'];
        if ($extension1 == "jpg" || $extension1== "JPG" || $extension == 'JPEG' || $extension == 'jpeg'){

            $tutor01 = str_replace(" ", "-", $tutor1);
            $nombre_archivo1 = $matricula.'-'.$tutor01.'.'.$extension1;

            move_uploaded_file($archivo1, '../'.$ruta1.'/'.$nombre_archivo1);
            $ruta1 = $ruta1."/".$nombre_archivo1;

        }else{
            header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
            exit;
        }
    }else {
        $ruta1="images/default/user.jpg";
    }

    $extension2 = '';
    $ruta2 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo2 = $_FILES['txtfototutor2']['tmp_name'];
    $nombre_archivo2 = $_FILES['txtfototutor2']['name'];
    $info2 = pathinfo($nombre_archivo2);

    if ($archivo2 != ''){

        $extension2=$info2['extension'];
        if ($extension2 == "jpg" || $extension2== "JPG" || $extension == 'JPEG' || $extension == 'jpeg'){

            $tutor02 = str_replace(" ", "-", $tutor2);
            $nombre_archivo2 = $matricula.'-'.$tutor02.'.'.$extension2;

            move_uploaded_file($archivo2, '../'.$ruta2.'/'.$nombre_archivo2);
            $ruta2 = $ruta2."/".$nombre_archivo2;

        }else{
            header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
            exit;
        }
    }else {
        $ruta2="images/default/user.jpg";
    }

    $extension3 = '';
    $ruta3 ='images/tutores/'.$nivel.'/'.$grado.'/'.$grupo;
    $archivo3 = $_FILES['txtfototutor3']['tmp_name'];
    $nombre_archivo3 = $_FILES['txtfototutor3']['name'];
    $info3 = pathinfo($nombre_archivo3);

    if ($archivo3 != ''){

        $extension3=$info3['extension'];
        if ($extension3 == "jpg" || $extension3== "JPG" || $extension == 'JPEG' || $extension == 'jpeg'){

            $tutor03 = str_replace(" ", "-", $tutor3);
            $nombre_archivo3 = $matricula.'-'.$tutor03.'.'.$extension3;

            move_uploaded_file($archivo3, '../'.$ruta3.'/'.$nombre_archivo3);
            $ruta3 = $ruta3."/".$nombre_archivo3;

        }else{
            header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
            exit;
        }
    }else {
        $ruta3="images/default/user.jpg";
    }

//CODIGOS QR

    //CODIGO QR TUTOR1
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;  
    $content = protect::encrypt($matricula, $tutor1);
    $espacio = str_replace(" ", "-", $tutor1);
    $filename = '../'.$dir.'/'.$espacio.'-'.$matricula.'.png'; 
    $level = 'H';
    $size = 10;
    $frameSize = 3;            
    QRcode::png($content, $filename, $level, $size, $frameSize); 
    $filename =$dir."/".$espacio.'-'.$matricula.'.png';

    //CODIGO QR TUTOR2
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;  
    $content2 = protect::encrypt($matricula, $tutor2);
    $espacio2 = str_replace(" ", "-", $tutor2);
    $filename2 = '../'.$dir.'/'.$espacio2.'-'.$matricula.'.png';            
    QRcode::png($content2, $filename2, $level, $size, $frameSize); 
    $filename2 =$dir."/".$espacio2.'-'.$matricula.'.png';

    //CODIGO QR TUTOR3
    $dir = 'images/qr/'.$nivel.'/'.$grado.'/'.$grupo;  
    $content3 = protect::encrypt($matricula, $tutor3);
    $espacio3 = str_replace(" ", "-", $tutor3);
    $filename3 = '../'.$dir.'/'.$espacio3.'-'.$matricula.'.png';           
    QRcode::png($content, $filename3, $level, $size, $frameSize); 
    $filename3 =$dir."/".$espacio3.'-'.$matricula.'.png';


//consultas
    $mysqli->set_charset('utf8');
    $consulta = $mysqli->prepare ("INSERT INTO alm (nombre,matricula,correo,grado,grupo,ciclo,foto,nivel) VALUES (?,?,?,?,?,?,?,?)");
    $consulta->bind_param('ssssssss', $nombre, $matricula, $correo, $grado, $grupo, $ciclo, $ruta, $nivel); 
    $consulta2 = $mysqli->prepare ("INSERT INTO papas (matricula, nombre1, nombre2, nombre3, foto1, foto2, foto3, qr1, qr2, qr3) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $consulta2->bind_param('ssssssssss', $matricula, $tutor1, $tutor2, $tutor3, $ruta1, $ruta2, $ruta3, $filename, $filename2, $filename3);
    
    if($consulta->execute()){
        $consulta2->execute();
        echo'<script type="text/javascript">
        alert("Alumno y Tutores registrado");
        window.location.href="../vistapanel.php";
        </script>';
        $mysqli->close();
    }else{
        echo'<script type="text/javascript">
        alert("no se registro, la matrícula del alumno y tutores ya existe.");
        window.location.href="../vistapanel.php";
        </script>';
    }

}else{
    echo'<script type="text/javascript">
        alert("Por favor introducir todos los campos");
        window.location.href="../vistaaltaalumnos.php";
        </script>';
}

?>