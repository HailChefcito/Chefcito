<?php
  include_once("../conex/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHEFCITO</title>
        <link rel="stylesheet" href=../styles/style.css>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    </head>
    <body  background="../resources/chefcito.jpg">
    <div class="hola">
        
        <?php include("inicio/cartasadmin.php");?>
        <ul>
        
        <li><h2 class="ho">Que desea hacer admin?</h2></li>
        <li><a href="platos.php">agregar</a></li><!-- aca iria una imagen de agregar-->
        <li><a href="borrar.php">borrar</a></li><!-- aca iria una imagen de borrar-->
        <li><a href="hola.php">ingred</li></a><!-- aca iria una imagen de actualizar-->
        <li><?php include("inicio/busqueda.php");?></li>
        <li><?php include("admin/crudadmin.php");?></li>
        <li><?php include("admin/crudad.php");?></li>
</ul>

    </div>
    </body>
</html>