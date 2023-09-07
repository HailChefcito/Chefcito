<?php
    include_once("../../conex/conexion.php");

    $idplato = $_GET['idPlatos'];
    mysqli_query($conn, "DELETE FROM platos WHERE idPlatos = $idplato");
    header("Location:../admin.php");
?>