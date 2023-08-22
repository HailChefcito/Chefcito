<?php
    include_once("../../conex/conexion.php");

    $idped = $_GET['idPedido'];
    mysqli_query($conn, "DELETE FROM pedidos WHERE idPedidos = $idped");
    header("Location:pedido.php");
?>