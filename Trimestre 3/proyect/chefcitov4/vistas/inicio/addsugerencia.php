<?php include_once("../../conex/conexion.php");

    $idSugerencia = $_POST['idSugerencia'];
    $emailUsuario = $_POST['emailUsuario'];
    $descripcionSugerencia = $_POST['descripcionSugerencia'];
    $valoracionSugerencia = $_POST['valoracionSugerencia'];


    mysqli_query($conn, "INSERT INTO sugerencia(idSugerencia, emailUsuario, descripcionSugerencia, valoracionSugerencia) VALUES ('$idSugerencia','$emailUsuario','$descripcionSugerencia','$valoracionSugerencia')");

    
    header('location: ../inicio.php');

?>