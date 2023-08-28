<?php include_once("../conex/conexion.php");

    $idSugerencia = $_POST['idSugerencia'];
    $numeroTelefono = $_POST['numeroTelefono'];
    $descripcionSugerencia = $_POST['descripcionSugerencia'];
    $valoracionSugerencia = $_POST['valoracionSugerencia'];


    mysqli_query($conn, "INSERT INTO sugerencia(idSugerencia, numeroTelefono, descripcionSugerencia, valoracionSugerencia) VALUES ($idSugerencia,$numeroTelefono,$descripcionSugerencia,$valoracionSugerencia)");

    header("Location:../inicio.php");

?>