<?php
    include_once("../../conex/conexion.php");

    $idSuge  = $_GET['idSugerencia'];
    mysqli_query($conn, "DELETE  FROM sugerencia WHERE  idSugerencia= $idSuge ");
    header("Location:../inicio.php");
?>