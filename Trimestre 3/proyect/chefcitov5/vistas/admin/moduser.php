<?php
  include_once("../../conex/conexion.php");
  //include_once("admin.php");
  //include_once("agregar.php");
  $ids=$_GET['numeroTelefono'];

  $querychefcito = mysqli_query($conn, "SELECT * FROM usuarios WHERE numeroTelefono='$ids'");

  while($mostrar = mysqli_fetch_array($querychefcito))
  {
       $numeroTelefono  = $mostrar['numeroTelefono'];
       $nombreUsuario = $mostrar['nombreUsuario'];
       $apellidoUsuario = $mostrar['apellidoUsuario'];
       $direccion = $mostrar['direccion'];
       $emailUsuario = $mostrar['emailUsuario'];
       $idSexoUsuario  = $mostrar['idSexoUsuario'];
       $idTipoUsuario  = $mostrar['idTipoUsuario'];
       $contraseña = $mostrar['contraseña'];
      }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEFCITO</title>
    <link rel="stylesheet" href="../style.css">
  </head>
    <body  background="../imagenes/chefcito.jpg">
        <div class=hola>   <!-- toca poner la clase para el css-->
            <form method="post" action="../admin.php" >
               
                       <form>
                       <h1>Registro</h1>
                       <label >N° de telefono</label>
                       <input type='number' name='phone' value="<?php echo $numeroTelefono;?>" readonly> <BR>
                       <label >Nombres</label>
                       <input type='text' name='name' value="<?php echo $nombreUsuario;?>">
               
                       <labe++l >Apellido</labe++l>
                       <input type='text' name='lstname' value="<?php echo $apellidoUsuario?>">
               
                       <label >Tipo de usuario</label><br>
                       <input  type='radio' name='usuario' value='1' id='cliente' value="<?php echo $idTipoUsuario;?>">
                       <label  >Cliente</label>
                       <input  type='radio'  name='usuario' value='2' id='admin'>
                       <label >Administrador</label><br>
               
                       <label>Genero</label>
                       <select name='genero' id='gene' value="<?php echo $idSexoUsuario;?>" required>
                       <option value='0'>No Seleccionado</option>
                       <option value='1'>Mujer</option>
                       <option value='2'>Hombre</option>
                       </select>
               
                       <label>Dirrecion</label>
                       <input type='text' name='address' value="<?php echo $direccion;?>"required readonly>
                       <label >Correo</label>
                       <input type='text' name='email' value="<?php echo $emailUsuario;?>" required readonly>
                       <label >Contraseña</label><br>
                       <input type='password' name='password' value="<?php echo $contraseña;?>"required readonly><br>
               

                <input type="submit" value="Enviar" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
                <a href="../admin.php">regresar al ingreso</a>
            </form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['btnmodificar']))
{
    $numeroTelefono0  = $mostrar['numeroTelefono'];
    $nombreUsuario0 = $mostrar['nombreUsuario'];
    $apellidoUsuario0 = $mostrar['apellidoUsuario'];
    $direccion0 = $mostrar['direccion'];
    $emailUsuario0 = $mostrar['emailUsuario'];
    $idSexoUsuario0  = $mostrar['idSexoUsuario'];
    $idTipoUsuario0  = $mostrar['idTipoUsuario'];
    $contraseña0 = $mostrar['contraseña'];
    $querymodificar0 = mysqli_query($conn,"UPDATE 
    usuarios SET numeroTelefono='$numeroTelefono0', nombreUsuarioo='$nombreUsuario0',apellidoUsuario='$apellidoUsuario0', direccion='$direccion0' , emailUsuario='$emailUsuario0' 
    , idSexoUsuario='$idSexoUsuario0', idTipoUsuario='$idTipoUsuario0', contraseña='$contraseña0' WHERE numeroTelefono='$ids'");

    echo "<script>window.location= 'admin.php' </script>";

}
?>