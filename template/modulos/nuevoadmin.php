<?php  
if(!empty($_POST['nombre']) && !empty($_POST['correo'])){

    require '../global/sesiones.php';
    require '../global/cn.php';
    $mysqli->set_charset('utf8');

    $nombre= addslashes($_POST['nombre']);;
    $correo= addslashes($_POST['correo']);
    $password= addslashes($_POST['pass']);
    $pass_cifrado=password_hash($password, PASSWORD_DEFAULT, array("cost"=>12));

    $extension = '';
    $ruta ='images/admin';
    $archivo = $_FILES['txtfoto']['tmp_name'];
    $nombre_archivo = $_FILES['txtfoto']['name'];
    $info = pathinfo($nombre_archivo);

    if ($archivo != ''){

        $extension=$info['extension'];
        if ($extension == "jpg" || $extension== "JPG" || $extension== "PNG" || $extension =="png" ){
            $nombre2 = str_replace(' ', '-', $nombre);
            $nombre_archivo = $nombre2.'.'.$extension;

            move_uploaded_file($archivo, '../'.$ruta.'/'.$nombre_archivo);
            $ruta = $ruta."/".$nombre_archivo;

        }else{
            header('location:../extend/alerta.php?msj=el formato no es valido&c=us&p=in&t=error');
            exit;
        }
    }else {
        $ruta="images/default/user.jpg";
    }


    $consulta = $mysqli->prepare ("INSERT INTO tblusuarios (nombre,correo,password,foto) VALUES (?,?,?,?)");
    $consulta->bind_param('ssss', $nombre, $correo, $pass_cifrado, $ruta); 
    

    if($consulta->execute()){
        echo'<script type="text/javascript">
        alert("Usuario registrado");
        window.location.href="../vistapanel.php";
        </script>';
        $mysqli->close();
    }else{
        echo "no se registro";
    }
}else{
    echo '<script type="text/javascript">
    alert("Por favor llena todos los campos");
    window.location.href="../vistanuevoadmin.php";
    </script>';
}
?>