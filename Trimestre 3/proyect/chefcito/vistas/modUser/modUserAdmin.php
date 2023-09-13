<?php

  include_once('../../conex/conexion.php');

  $usurMod=$_POST['email'];


  $contra0 = $_POST['contraseña'];
  $conf_contra = $_POST['conf_contra'];

  if ($conf_contra == $contra0) {
      $numero0 = $_POST['telefono'];
      $nombreUsuario0 = $_POST['nomUser'];
      $apellidoUsuario0 = $_POST['apelUser'];
      $direccion0 = $_POST['direccionUser'];
      $sexo0 = $_POST['genero'];
      $tipoUser0 = $tipoUsuAct;

      $queryModificar = "UPDATE usuarios SET numeroTelefono = '$numero0', nombreUsuario = '$nombreUsuario0', apellidoUsuario = '$apellidoUsuario0', direccion = '$direccion0', idSexoUsuario = '$sexo0', contraseña = '$contra0' WHERE emailUsuario like '%$usurMod%'";
      $resultModificar = mysqli_query($conn, $queryModificar);

      if ($resultModificar) {
          header('Location: ../cerrarSesion/logOut.php');
          exit();
      } else {
          echo 'Error al modificar el usuario.';
      }
  } else {
      echo 'Las contraseñas no coinciden.';
  }

?>