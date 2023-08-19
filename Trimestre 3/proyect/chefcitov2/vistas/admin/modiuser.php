<?php
  include_once("../conex/conexion.php");
  //include_once("admin.php");
  //include_once("agregar.php");

  $ids=$_GET['numeroTelefono'];

  $querybuscar = mysqli_query($conn, "SELECT idSugerencia, numeroTelefono, descripcionSugerencia, valoracionSugerencia FROM sugerencia WHERE numeroTelefono='$ids'");

  while($mostrar = mysqli_fetch_array($querybuscar))
 {
    $idSugerencia = $mostrar['idSugerencia'];
    $numeroTelefono = $mostrar['numeroTelefono'];
    $descripcionSugerencia = $mostrar['descripcionSugerencia'];
    $valoracionSugerencia = $mostrar['valoracionSugerencia'];
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
            <form method="post" >
                <label>id </label>
                <input type="text" name="idSugerencia" maxlength="45" value="<?php echo $idSugerencia;?>" required>

                <label>telefono</label>
                <input type="number" name="numeroTelefono" maxlength="5" value="<?php echo $numeroTelefono;?>" required>

                <label>Descrpcion</label>
                <input type="text" name="descripcionSugerencia" maxlength="9" value="<?php echo $descripcionSugerencia;?>" required>
                <label>valor</label>
                <input type="number" name="valoracionSugerencia" maxlength="300" value="<?php echo $valoracionSugerencia;?>" required></br>



                <input type="submit" value="Enviar" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
                <a href="admin.php">regresar al ingreso</a>
            </form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['btnmodificar']))
{
    $numeroTelefono0 = $_POST['numeroTelefono'];
    $descripcionSugerencia0 = $_POST['descripcionSugerencia'];
    $valoracionSugerencia0 = $_POST['valoracionSugerencia'];

    $querymodificar = mysqli_query($conn,"UPDATE sugerencia SET numeroTelefono='$numeroTelefono0',descripcionSugerencia='$descripcionSugerencia0', valoracionSugerencia='$valoracionSugerencia0' WHERE numeroTelefono='$ids'");

    echo "<script>window.location= 'admin.php' </script>";

}
?>