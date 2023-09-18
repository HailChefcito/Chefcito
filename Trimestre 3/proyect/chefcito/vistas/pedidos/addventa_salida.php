<?php 
include_once("../../conex/conexion.php");
 //Se ingresaran los datos de la venta y se enviaran a la bd
 $idpedido = $_GET['idpedido'];
 $totalventas = $_GET['precioventa'];
 $fecha = date('Y-m-d');
 $hora = date('h:i:s A');
  mysqli_query($conn,"INSERT INTO `ventas`(`idPedidos`, `fechaVenta`, `horaVentas`, `totalVentas`) VALUES ('$idpedido','$fecha','$hora','$totalventas')");
    //seguira con el ingreso de datos a la salida
 $mosidped=mysqli_query($conn, "SELECT idVenta FROM ventas ORDER BY idVenta DESC ");//Aca se busca la id de la venta recien registrada
    $idven  = mysqli_fetch_assoc($mosidped)['idVenta'];
        $pedidoDetalles = mysqli_query($conn, "SELECT idPlatos,cantidadPedidosPlatos,precioUnitarioPedidoPlatos FROM pedidoproducto WHERE idPedidos=$idpedido") ; // Recupera los detalles del pedido
    if(isset($pedidoDetalles)){
        while ($detalle = mysqli_fetch_assoc($pedidoDetalles)) {
            $idplato = $detalle['idPlatos'];
            $cantidad = $detalle['cantidadPedidosPlatos'];
            $precioun = $detalle['precioUnitarioPedidoPlatos'];
            $precio_total_plato = $precioun * $cantidad;

            // Se insertan los detalles de salida en la tabla "salidas"
            mysqli_query($conn, "INSERT INTO `salidas`(`idPlatos`, `idVenta`, `fechaSalida`, `horaSalida`, `cantidadSalida`, `valorSalida`) VALUES ('$idplato','$idven','$fecha','$hora','$cantidad','$precio_total_plato')");
            //En la tabla platos se inserta las salidas
                $selecionplato=mysqli_query($conn, "SELECT salidaPlatos FROM platos WHERE idPlatos=$idplato");//Aca se busca la id de la venta recien registrada
                 $Salidaplato  = mysqli_fetch_assoc($selecionplato)['salidaPlatos'];
                 $Salidaplato2 = $Salidaplato+$cantidad;
                mysqli_query($conn, "UPDATE platos SET salidaPlatos=$Salidaplato2 WHERE idPlatos=$idplato");//Aca se busca la id de la venta recien registrada     
            header('Location: ../inicio.php');
        }
    }
    
    else{
        header('Location: ../error.php');
    }

 