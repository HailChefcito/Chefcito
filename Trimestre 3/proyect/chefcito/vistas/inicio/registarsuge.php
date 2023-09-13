<?php
  session_start();
  $actual = $_SESSION['usuarioAct'];
  include_once("../../conex/conexion.php");
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
    

    <body  background="../../resources/chefcito.jpg">
    <div class="fondotresrecuadros">
      <form method="post" action="addsugerencia.php">
      <center>
                <label class="h2">El usuario: <?php echo $actual?> desea agruegar una sugerenciaa</label>
                <P></P>

                <label class="h3">Descrpcion</label>
                <textarea class="form-control" name="descripcionSugerencia"  rows="3" required></textarea>

                <label class="h3">valor</label><p></p>
                <input type="number" name="valoracionSugerencia" maxlength="1"required></br>



                <input type="submit" value="Enviar" name="addsuge" onClick="Javascript: return confirm ('¿Deseas registrar su sugerenia?');">
                <a class="btn btn-secondary"href="../inicio.php">Regresar</a>
                
                </center>
    </form>
    </div>
</body>