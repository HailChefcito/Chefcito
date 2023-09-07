<?php include_once("../conex/conexion.php");?>
<button class="btn btn-primary" style="margin-left: 600px; width: 15%;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class='ic' src='../resources/informacion.png'alt=''></button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel"><a class="btn btn-outline-success" href="cerrarSesion/logOut.php" onClick="Javascript: return confirm('¿Seguro en cerrar secion?')">cerrar sesion</a></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <?php
            // checa si el usuario esta logeado kkkkk
            

            if (!isset($_SESSION['usuarioAct'])) {
                header("Location: login.php");
                exit();
            }
            // recibe la info del pto usuario man
            $actual = $_SESSION['usuarioAct'];
            $query = "SELECT * FROM usuarios WHERE emailUsuario = '$actual'";
            $result = mysqli_query($conn, $query);
            $userData = mysqli_fetch_assoc($result);

            // recibe el sexo(riko) del usuario
            $sexo = $userData['idSexoUsuario'];
            $querySexo = "SELECT nombreSexoUsuario FROM sexousuario WHERE idSexoUsuario = '$sexo'";
            $resultSexo = mysqli_query($conn, $querySexo);
            $generoEspecifico = mysqli_fetch_assoc($resultSexo)['nombreSexoUsuario'];


            ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>CHEFCITO</title>
                <link rel="stylesheet" href="styles/style.css">
            </head>
            <body background="resources/chefcito.jpg">
            <div class="usuario">  
                <h4><center>Bienvenido: <?php echo $userData['nombreUsuario']; ?> !</center></h4>
                <br><center>
                    <label align="center">Teléfono:<?php echo $userData['numeroTelefono']; ?></label>
                    <label align="center">Correo: <?php echo $userData['emailUsuario']; ?></label>
                    <label align="center">Dirección: <?php echo $userData['direccion']; ?></label>
                    <!-- en caso de que el weon quiera modificar su cuenta we -->
        </center>
          <h3>Sugerencias de los usuarios</h3><p></p>
          <p></p>
          <p></p>
<?php
            $querychefcito=mysqli_query($conn, "SELECT idSugerencia , descripcionSugerencia, valoracionSugerencia,emailUsuario   FROM sugerencia");
            while($mostrar = mysqli_fetch_array($querychefcito))
            {
            echo"<div class='raya'></div>";
            echo"<table >";
            echo"<tr>";
            echo"<td><h3>Sugerencia</h3></td>";
            echo"<td>|</td>";
            echo"<td >Valoración</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td >Correo: ".$mostrar['emailUsuario']."</td>";
            echo"<td colspan='2'>".$mostrar['valoracionSugerencia']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td colspan='3'>".$mostrar['descripcionSugerencia']."</td>";
            echo"</tr>";
            echo"</table>";
            }
        ?>
        </div>
  </div>
</div>