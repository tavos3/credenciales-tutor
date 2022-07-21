<?php
if(isset($_POST["btnlogin"])){
    require '../global/cn.php';
    $mysqli->set_charset('utf8');
    $correo = filter_var($_POST['txtEmail']);
    $password = filter_var($_POST['txtPassword']);
    $consulta = $mysqli->prepare ("SELECT * FROM tblusuarios WHERE correo=?");
    $consulta->bind_param("s", $correo);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if($row = $resultado->fetch_assoc()){
        $pwdcheck = password_verify($password, $row['password']);
        
        if($pwdcheck == false){
            echo '<script type="text/javascript">
            alert("Las credenciales son incorrectas");
            window.location.href="../index.php";
            </script>';
            exit();      
        }elseif($pwdcheck == true){
            session_start();
            $_SESSION['usuario']=$row;
            header('Location:../vistapanel.php');
        }else{
            echo '<script type="text/javascript">
            alert("Las credenciales son incorrectas");
            window.location.href="../index.php";
            </script>';
            exit(); 
        }
    $mysqli->close(); 
}else{
    echo '<script type="text/javascript">
        alert("Las credenciales son incorrectas");
        window.location.href="../index.php";
        </script>';
    exit();
}
}
?>