<?php include_once("../../conex/conexion.php");

    $idpedido = $_POST['intidped'];
    $numerotel = $_POST['numer'];
    $fechaped = $_POST['txtdate'];
    $horaped = $_POST['txthour'];
    $valorped = $_POST['valueped'];
    //tener cuidado dado que un valor se toma en otra tabla


    mysqli_query($conn, "INSERT INTO pedidos(idPedidos, numeroTelefono, fechaPedido, horaPedido, valorPedido) VALUES ('$idpedido','$numerotel','$fechaped','$horaped','$valorped')");

    header("Location:../pedidos/pedido.php");

?>