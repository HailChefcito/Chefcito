<?php include_once("../../conex/conexion.php");

    $nombreplato = $_POST['nameplato'];
    $idplato = $_POST['idplato'];
    $valorplato = $_POST['valorplato'];
    $tipoplato = $_POST['tipoplato'];
    $descripcion = $_POST['desplato'];
    //$ingredientes = $_POST['ingredientes']; Ojo con este porque creo que sale a otra tabla


    mysqli_query($conn, "INSERT INTO platos(idPlatos,nombrePlatos, valorPlatos, idCategPlatos, descripcionPlatos ) VALUES('$idplato','$nombreplato','$valorplato','$tipoplato','$descripcion')");

    header("Location:admin.php");

?>