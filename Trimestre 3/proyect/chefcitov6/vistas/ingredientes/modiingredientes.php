<?php
  include_once("../../conex/conexion.php");


  $idIngredientes=$_GET['idIngredientes'];

  $queryingre = mysqli_query($conn, "SELECT idIngredientes,nombreIngrediente FROM ingredientes WHERE idIngredientes='$idIngredientes'");

  while($mostrar = mysqli_fetch_array($queryingre))
 {
    $idIngredientes = $mostrar['idIngredientes'];
    $nombreIngrediente = $mostrar['nombreIngrediente'];
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHEFCITO</title>
    <link rel="stylesheet" href=../../styles/style.css>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
    <body background="../../resources/chefcito.jpg">
        <div  class="table">
            <form method="post" class="registro">
                <label>id ingredientes</label>
                <input type="text" name="idingredientes" maxlength="45" value="<?php echo $idIngredientes;?>" readonly="">

                <label>nombre Ingrediente</label>
                <input type="text" name="nombreIngrediente"  value="<?php echo $nombreIngrediente;?>" required>
                <input type="submit" value="Enviar" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
                <a href="../admin.php" class="btn btn-outline-success" style="margin-left: 100px;">Regresar</a>
            </form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['btnmodificar']))
{
    $nombreIngrediente1 = $_POST['nombreIngrediente'];

    $querymodificar = mysqli_query($conn,"UPDATE ingredientes SET nombreIngrediente='$nombreIngrediente1' WHERE idIngredientes='$idIngredientes'");

    echo "<script>window.location= '/hola.php' </script>";

}
?>