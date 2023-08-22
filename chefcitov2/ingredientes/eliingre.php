<?php
    include_once("../conexion.php");

    $idIngredientes = $_GET['idIngredientes'];
    mysqli_query($conn, "DELETE FROM ingredientes WHERE idIngredientes = $idIngredientes");
    header("Location:../hola.php");
?>