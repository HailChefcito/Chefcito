<?php
  include_once("../conex/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHEFCITO</title>
        <link rel="stylesheet" href="../styles/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body  background="../resources/chefcito.jpg">
<form method="post" action="inicio/addsugerencia.php">
                <label>id </label>
                <input type="text" name="idSugerencia" maxlength="45" value="<?php echo $idSugerencia;?>" required>

                <label>telefono</label>
                <input type="number" name="numeroTelefono" maxlength="5" value="<?php echo $numeroTelefono;?>" required>

                <label>Descrpcion</label>
                <input type="text" name="descripcionSugerencia" maxlength="9" value="<?php echo $descripcionSugerencia;?>" required>
                <label>valor</label>
                <input type="number" name="valoracionSugerencia" maxlength="300" value="<?php echo $valoracionSugerencia;?>" required></br>



                <input type="submit" value="Enviar" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas agregar este plato a la carta?');">
                <a href="inicio.php">regresar al ingreso</a>
</form>
</body>