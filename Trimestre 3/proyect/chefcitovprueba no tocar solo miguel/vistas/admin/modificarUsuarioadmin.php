
<?php
include_once("../../conex/conexion.php");

$_SESSION['modUsur'] = $_GET["emailModUsu"];
$usurMod = $_GET["emailModUsu"];

$querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE emailUsuario='$usurMod'");

if (mysqli_num_rows($querybuscar) == 0) {
  echo "Error: User not found.";
  exit;
}

$mostrar = mysqli_fetch_array($querybuscar);
$numero = $mostrar['numeroTelefono'];
$nombreUsuario = $mostrar['nombreUsuario'];
$apellidoUsuario = $mostrar['apellidoUsuario'];
$direccion = $mostrar['direccion'];
$email = $mostrar['emailUsuario'];
$sexo = $mostrar['idSexoUsuario'];
$tipoUser = $mostrar['idTipoUsuario'];
$contraseña = $mostrar['contraseña'];

$querytipouser = mysqli_query($conn, "SELECT nombreTipoCliente FROM tipousuario WHERE idTipoUsuario='$tipoUser'");
$fila = mysqli_fetch_array($querytipouser);
$tipoUsur = $fila['nombreTipoCliente'];

$querysexo = mysqli_query($conn, "SELECT * FROM sexousuario WHERE idSexoUsuario='$sexo'");
$filaSexo = mysqli_fetch_array($querysexo);
$generoEspecifico = $filaSexo['nombreSexoUsuario'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHEFCITO</title>
  <link rel="stylesheet" href="../../styles/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body background="../../resources/chefcito.jpg">
  <div class="hola">
    <form method="post" action="../modUser/modUserAdmin.php">
      <label>Telefono:</label><br>
      <input type="number" name="telefono" value="<?= $numero; ?>" required><br>

      <label>Nombres:</label>
      <input type="text" name="nomUser" value="<?= $nombreUsuario; ?>" required>

      <label>Apellidos:</label>
      <input type="text" name="apelUser" value="<?= $apellidoUsuario; ?>" required>

      <label>Direccion:</label>
      <input type="text" name="direccionUser" value="<?= $direccion; ?>" required><br><p></p>

      <label>Tu Correo: <input type="text" name="email" value="<?= $_SESSION['modUsur']; ?>" readonly></label>
      <label style="color: red;">ESTE NO SE PUEDE CAMBIAR</label><p></p>

      <label>Sexo:</label>
      <select name="genero" id="gene" required>
        <option value="0">No Seleccionado</option>
        <option value="1">Mujer</option>
        <option value="2">Hombre</option>
      </select>

      <label class="label2">tipo de usuario, eres <?= $tipoUsur; ?> (no se puede cambiar)</label><p></p>

      <label>Contraseña:</label>
      <input type="password" name="contraseña" placeholder="ingrese una nueva contraseña" required><br>

      <label>Confirmar nueva contraseña:</label>
      <input type="password" name="conf_contra" placeholder="confirme la contraseña" required><br>

      <input type="submit" style="text-align: center;" value="Update" name="btnmodificar" onClick="Javascript: return confirm('¿Deseas Modificar tu cuenta?, seras redirigido al login');">
      <a href="../admin.php" style="text-align: center;" class="vamo">Volver</a>
    </form>
  </div>
</body>
</html>