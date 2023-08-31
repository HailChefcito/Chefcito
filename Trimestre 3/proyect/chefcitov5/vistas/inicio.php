<?php
session_start();
  include_once("../conex/conexion.php");
  include("inicio/actionbandeja.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>CHEFCITO</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../styles/style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body background="../resources/chefcito.jpg">
    <div class="hola">
      <?php include("inicio/cartas.php");?>  
      <ul>
        <li><a href="inicio.php"><h2 >CHEFCITO.com</h2></a></li>
        <li><?php include("inicio/btnbandeja.php");?></li>
        <li><?php include("inicio/busqueda.php");?></li>
        <li><?php include("inicio/btncuenta.php");?></li>
        <li ><a class="btn btn-outline-success" href="cerrarSesion/logOut.php" onClick="Javascript: return confirm('¿Seguro en cerrar secion?')">cerrar sesion</a></li>
         
      </ul>
    </div> 
  </body>
</html>