<?php
  include_once("../../conex/conexion.php");
  //include_once("admin.php");
  //include_once("agregar.php");

  $id=$_GET['idPlatos'];

  $querybuscar = mysqli_query($conn, "SELECT nombrePlatos,idPlatos,valorPlatos,idCategPlatos ,descripcionPlatos FROM platos WHERE idPlatos='$id'");

  while($mostrar = mysqli_fetch_array($querybuscar))
 {
    $nombrePlato = $mostrar['nombrePlatos'];
    $idPlato = $mostrar['idPlatos'];
    $valorPlato = $mostrar['valorPlatos'];
    $tipoplato = $mostrar['idCategPlatos'];
    $descripcion = $mostrar['descripcionPlatos'];
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
    <body  background="../../resources/chefcito.jpg">
        <div class=hola>   <!-- toca poner la clase para el css-->
            <form method="post" >
                <label>Nombre del plato</label>
                <input type="text" name="nameplato" maxlength="45" value="<?php echo $nombrePlato;?>" required>

                <label>Id de plato</label>
                <input type="number" name="idplato" maxlength="5" value="<?php echo $idPlato;?>" required>

                <label>Valor del plato</label>
                <input type="number" name="valorplato" maxlength="9" value="<?php echo $valorPlato;?>" required>

                <label>Tipo de plato</label>
                
                <select name="tipoplato" id="plato">
                    <option value="1" <?php if ($tipoplato == "1") echo "checked"; ?>>Entrada</option>
                    <option value="2" <?php if ($tipoplato == "2") echo "checked"; ?>>Plato fuerte</option>
                    <option value="3" <?php if ($tipoplato == "3") echo "checked"; ?>>Bebida</option>
                    <option value="4" <?php if ($tipoplato == "4") echo "checked"; ?>>Postre</option>
                    <option value="5" <?php if ($tipoplato == "5") echo "checked"; ?>>Acompañamiento</option>
                </select>

                <label>Descripción del plato</label>
                <input type="text" name="desplato" maxlength="300" value="<?php echo $descripcion;?>" required>

                <label>Ingredientes que lleva</label>  <!-- esta pendiente el tema de ingredientes.... lo resolvemos con el de bd -->
                <input type="text" name="ingredientes" disabled>

                <input type="submit" value="Enviar" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
                <a href="../admin.php"class="btn btn-secondary">regresar al ingreso</a>
            </form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['btnmodificar']))
{
    $nombreplato0 = $_POST['nameplato'];
    $valorplato0 = $_POST['valorplato'];
    $tipoplato0 = $_POST['tipoplato'];
    $descripcion0 = $_POST['desplato'];

    $querymodificar = mysqli_query($conn,"UPDATE platos SET nombrePlatos='$nombreplato0',valorPlatos='$valorplato0', idCategPlatos='$tipoplato0', descripcionPlatos='$descripcion0' WHERE idPlatos='$id'");

    echo "<script>window.location= '../admin.php' </script>";

}
?>