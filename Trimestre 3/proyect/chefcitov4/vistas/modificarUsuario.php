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
    
    <?php 
    session_start();
    if (!isset($_SESSION["emailUsuario"])) {#LA FUNCION BASICA DE ESTE IF, ES DE QUE SI UNA DE LAS PRINCIPALES VARIABLES QUE GUARDA EL SESSION ESTA VACIA(BAJO CUALQUIER MOTIVO) ENTONCS LO MANDA DIRECTO A INDEX.PHP SIMPLEMENTE PARA QUE EL USUARIO CREE UNA NUEVA SESSION, ESTA DEBE IR EN TODAS LAS PAGINAS WE, TODAS DONCE SEA NECESARIA LA SESSION 
      header("Location: ../index.php");
    }
    include("modUser/fixUser.php");

    ?>


    </body>
</html>
