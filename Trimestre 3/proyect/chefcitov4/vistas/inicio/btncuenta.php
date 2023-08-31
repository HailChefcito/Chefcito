<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class='ic' src='../resources/informacion.png'alt=''></button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
<div class="fo">
<div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    
    <div class="offcanvas-body">
        <figure class="text-center">
        <blockquote class="blockquote">
            <h2>informacion del cliente</h2>
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
                <h4>Bienvenido: <?php echo $userData['nombreUsuario']; ?> !!</h4>
                <br>
                <label align="center">Teléfono: <?php echo $userData['numeroTelefono']; ?></label>
                <label align="center">Correo: <?php echo $userData['emailUsuario']; ?></label>
                <label align="center">Dirección: <?php echo $userData['direccion']; ?></label>
                <label align="center">Sexo: <?php echo $generoEspecifico; ?></label>
                <p>
                <!-- en caso de que el weon quiera modificar su cuenta we -->
                <a type="button" class='btn btn-outline-success'  href="../vistas/modificarUsuario.php">Modificar</a>
                <?php
            $querychefcito=mysqli_query($conn, "SELECT emailUsuario, descripcionSugerencia, valoracionSugerencia FROM sugerencia");
            while($mostrar = mysqli_fetch_array($querychefcito))
            {

            echo"<table class='table'>";
            echo"<tr>";
            echo"<td>Sugerencia</td>";

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
            
            echo"<tr>";
            echo"<td><a class='btn btn-outline-success' href=\"modisuge.php?emailUsuario=$mostrar[emailUsuario]\">Editar</a>";
            echo"<td><a class='btn btn-outline-success' href =\"eliminar.php?emailUsuario=$mostrar[emailUsuario]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[emailUsuario]?')\">Eliminar</a></td>" ;
            echo"<td><a class='btn btn-outline-success' href =\"registarsuge.php?emailUsuario=$mostrar[emailUsuario]\"onClick=\"return confirm('¿Vas a subir un sugerencia $mostrar[emailUsuario]?')\">sugerencia</a></td>";
            echo"</tr>";
            echo"</table>";
            }
        ?>
    </div>
    </div>
</body>
</html>
        </blockquote>
        </figure>
    </div>
    </div> 
