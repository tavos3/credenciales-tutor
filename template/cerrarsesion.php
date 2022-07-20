<?php
session_start();
unset($_SESSION['usuario']); 
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
if(session_destroy()) // Destruye todas las sesiones
{
header("Location: index.php"); // Redireccionando a la pagina index.php
}
header('Location:index.php');
exit;
?>