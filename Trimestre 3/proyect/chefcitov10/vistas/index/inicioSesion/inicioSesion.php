<?php
session_start();
require_once('../../../conex/conexion.php');

// recibe la info de login.php
$usuario = $_POST['emailUsuario'];
$contraseña = $_POST['password'];

// alamacena la el correo del usuario
$_SESSION['usuarioAct'] = $usuario;

// busca al usuario en la bata base
$queryinicioSesion = "SELECT * FROM usuarios WHERE emailUsuario = '$usuario' AND contraseña = '$contraseña'";
$resultinicioSesion = mysqli_query($conn, $queryinicioSesion);
$cantidadFilas = mysqli_num_rows($resultinicioSesion);

if ($cantidadFilas > 0) {
    $fila = mysqli_fetch_assoc($resultinicioSesion);

    // guarda el tipo de usuario 
    $_SESSION['tipoUsurAct'] = $fila['idTipoUsuario'];

    // redirigue dependiendo el tipo de usuario en esta session we
    if ($fila['idTipoUsuario'] == 2) { // si es admin entoncs aja
        header('Location: ../../admin.php');
    } else { // si es un cliente entoncs aja
        header('Location: ../../inicio.php');
    }
} else {
    // Si no encuentra al usuario muestra error, esto depende de como haya el usuario digitado su info
    header('Location: ../../error.php');
}

// DIOS ME SALVE DEL BALAZO QUE ME QUIERO METER POR HACER EL LOGGIN DENUEVO BRUH
?>