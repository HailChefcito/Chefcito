<?php include_once("conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body background="imagenes/chefcito.jpg" >
<div>
    <?php
if(isset($_POST['btnbuscar']))
{
    $buscar=$_POST['txtbuscar'];
    $querychefcito=mysqli_query($conn, "SELECT idIngredientes,nombreIngrediente FROM ingredientes WHERE idIngredientes  LIKE'".$buscar."%'");
    
}
else {
    $querychefcito=mysqli_query($conn, "SELECT idIngredientes,nombreIngrediente FROM ingredientes ");   
}

while($mostrar=mysqli_fetch_array($querychefcito))
{

    echo"<table class='table'>";
    echo"<tr><th >idIngredientes: ".$mostrar['idIngredientes']."</th>";
    echo "<td style='width=26%'><a href=\"ingredientes/modiingredientes.php?idIngredientes=$mostrar[idIngredientes]\">Modificar</a>";
    echo"<br>";
    echo"</tr>";

  
    echo"<br>";
    echo"<th> nombreIngrediente: ".$mostrar['nombreIngrediente']."</th>";
    echo "<th><a href =\"ingredientes/eliingre.php?idIngredientes=$mostrar[idIngredientes]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[idIngredientes]?')\">Eliminar</a></th>" ;
   
    echo"<br>";
    echo"</table>";
}
?>
</div>
</body>
</html>