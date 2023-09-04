<?php include_once("../../conex/conexion.php");
    session_start();

    $actual = $_SESSION['usuarioAct'];
    $descripcionSugerencia = $_POST['descripcionSugerencia'];
    $valoracionSugerencia = $_POST['valoracionSugerencia'];


    mysqli_query($conn, "INSERT INTO sugerencia(idSugerencia, emailUsuario, descripcionSugerencia, valoracionSugerencia) VALUES ('','$actual','$descripcionSugerencia','$valoracionSugerencia')");

    
    header('location: ../inicio.php');

?>