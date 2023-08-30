<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class="icono"src="../resources/icono.jpeg"alt="" ></button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

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
<div class="hola">
    <h2>Bienvenido <?php echo $userData['nombreUsuario']; ?> !!!!!!</h2>
    <br><br><br><br><br>
    <label align="center">Teléfono: <?php echo $userData['numeroTelefono']; ?></label>
    <label align="center">Correo: <?php echo $userData['emailUsuario']; ?></label>
    <label align="center">Dirección: <?php echo $userData['direccion']; ?></label>
    <label align="center">Sexo: <?php echo $generoEspecifico; ?></label>

    <!-- en caso de que el weon quiera modificar su cuenta we -->
    <a type="button" href="../vistas/modificarUsuario.php">Modificar</a>
</div>
</body>
</html>