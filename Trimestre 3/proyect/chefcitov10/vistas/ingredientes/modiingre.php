<?php include_once("../conex/conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=styles/style.css>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>
<body background="imagenes/chefcito.jpg" >
<div><ul>
    <li><img src='../resources/chefcito.jpg' class='img-fluid rounded-start' alt='...' style="width:20%;"></li>
<form class="d-flex" method= "POST" style=" height: 50PX; margin-left: 30%;">

        <input class="form-control me-2" type="search" placeholder="Platos" aria-label="Search" name="txtbuscar">
        <button class="btn btn-outline-success" type="submit" name="btnbuscar">Buscar ingredientes</button>
        <a class="btn btn-outline-success" style="margin-left: 400px; width: 15%;" href="admin.php">regresar</a>
</form>
</ul></div>

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
    echo "<td width=26%'><a class='btn btn-outline-success'href=\"ingredientes/modiingredientes.php?idIngredientes=$mostrar[idIngredientes]\">Modificar</a>";
    echo"<br>";
    echo"</tr>";

  
    echo"<br>";
    echo"<th> nombreIngrediente: ".$mostrar['nombreIngrediente']."</th>";
    echo "<th><a class='btn btn-outline-success' href =\"ingredientes/eliingre.php?idIngredientes=$mostrar[idIngredientes]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[idIngredientes]?')\">Eliminar</a></th>" ;
   
    echo"<br>";
    echo"</table>";
}
?>
</div>
</body>
</html>