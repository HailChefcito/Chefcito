<?php 

    include_once('../../conex/conexion.php');

if(isset($_POST['btnmodificar']))
{

  $contra0 = $_POST['contraseña'];
  $conf_contra = $_POST['conf_contra'];
  if($conf_contra == $contra0){
    $numero0 = $_POST['telefono'];
    $nombreUsuario0 = $_POST['nomUser'];
    $apellidoUsuario0 = $_POST['apelUser'];
    $direccion0 = $_POST['direccionUser'];
    $email0 = $_POST['correoUser'];
    $sexo0 = $_POST['genero'];
    $tipoUser0 = $tipoUsuAct;

    $querymodificar = mysqli_query($conn,"UPDATE usuarios SET numeroTelefono='$numero0',nombreUsuario='$nombreUsuario0',apellidoUsuario='$apellidoUsuario0',direccion='$direccion0',emailUsuario='$email0',idSexoUsuario='$sexo0',idTipoUsuario='$tipoUser0',contraseña='$contra0' WHERE emailUsuario='$usurMod'");

    header('location: ../admin.php');
  }
}
?>