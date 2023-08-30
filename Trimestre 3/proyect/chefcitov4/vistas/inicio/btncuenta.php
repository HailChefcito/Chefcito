<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class="icono"src="../resources/icono.jpeg"alt="" ></button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <?php
    #esto abajo es para verificar que haya una session xddd, si no hay entoncs lo manda al login, de aqui pa abajo es modificar usuario, hay que mostrarlo primero y darle la opcion al usuario si lo quiere modificar

  $actual=$_SESSION['usuarioAct'];
  $tipoUsuAct=$_SESSION['tipoUsurAct'];



  $querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE emailUsuario='$actual'");
  
  $querytipouser = mysqli_query($conn, "SELECT nombreTipoCliente FROM tipousuario WHERE idTipoUsuario='$tipoUsuAct'");


  while($fila = mysqli_fetch_array($querytipouser))
 {
    $tipoUsur = $fila['nombreTipoCliente'];

 }
  while($mostrar = mysqli_fetch_array($querybuscar))
 {
    $numero = $mostrar['numeroTelefono'];
    $nombreUsuario = $mostrar['nombreUsuario'];
    $apellidoUsuario = $mostrar['apellidoUsuario'];
    $direccion = $mostrar['direccion'];
    $email = $mostrar['emailUsuario'];
    $sexo = $mostrar['idSexoUsuario'];
    $tipoUser = $mostrar['idTipoUsuario'];
    $contraseña = $mostrar['contraseña'];

 }
 $querysexo = mysqli_query($conn, "SELECT * FROM sexousuario WHERE idSexoUsuario='$sexo'");
 while($filaSexo = mysqli_fetch_array($querysexo))
 {
    $generoEspecifico = $filaSexo['nombreSexoUsuario'];
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEFCITO</title>
    <link rel="stylesheet" href=styles/style.css>
  </head>
    <body  background="resources/chefcito.jpg">
        <div class=hola>   <!-- toca poner la clase para el css-->

                <h2>Bienvenido <?php echo $nombreUsuario?> !!!!!! </h2>
                <br></br><br></br><br></br><br></br>
                <label align="center">telefono---------------<?php echo $numero?></label>
                <label align="center">correo---------------<?php echo $email?> </label>
                <label align="center">direccion---------------<?php echo $direccion?> </label>
                <label align="center">sexo---------------<?php echo $generoEspecifico?> </label>

                <!--aqui va para que seleccione el sexo dxd, hay que hacer una consulta xdxdxdxdxdxdxdxd, o no, nose xdxdxdxdxd -->

                <a type="button" href="../vistas/modificarUsuario.php">Modificar</button>
        </div>
    </body>
</html>