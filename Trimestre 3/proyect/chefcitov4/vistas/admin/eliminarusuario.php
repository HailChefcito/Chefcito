<?php
    include_once("../../conex/conexion.php");

    $nd = $_GET['numeroTelefono1'];
    mysqli_query($conn, "DELETE  FROM usuarios WHERE numeroTelefono=$nd");
    header("Location:../admin.php");
?>