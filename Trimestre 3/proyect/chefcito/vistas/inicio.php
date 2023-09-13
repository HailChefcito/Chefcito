<?php
session_start();

  if (!isset($_SESSION['usuarioAct'])){
    header('location: ../index.php');
  }
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <div class="hola">
      <?php include("inicio/cartas.php");?>  
      <ul class="ull">
        <li class="lli"><img src='../resources/chefcito.jpg' class='img-fluid rounded-start' alt='...' style="width:25%;"></li>
        <li class="lli"><a  href="inicio.php"><h2>CHEFCITO.com</h2></a></li>
        <li class="lli"><?php include("inicio/busqueda.php");?></li>
        <li class="lli"><?php include("inicio/btnbandeja.php");?></li>  
        <li class="lli"><?php include("inicio/btncuenta.php");?></li>
            <!-- Example single danger button -->
      </ul>
    </div> 
    <div class="pagina">
</div>
  </body>
</html>