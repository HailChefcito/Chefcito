<?php
    include_once("conexion.php");

    $idplato = $_GET['idPlatos'];
    mysqli_query($conn, "DELETE FROM platos WHERE idPlatos = $idplato");
    header("Location:inicio.php");
?>