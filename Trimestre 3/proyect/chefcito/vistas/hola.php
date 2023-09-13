<?php 
    session_start();
    if (!isset($_SESSION['usuarioAct'])){
        header('location: ../index.php');
    }
    include_once("../conex/conexion.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chefcito.com</title>
    <link rel="stylesheet" href="../styles/style.css">
    
</head>
<body background="../resources/chefcito.jpg">
<div class="hola">
    <?php include("ingredientes/modiingre.php");?>
</div>
</body>
</html>