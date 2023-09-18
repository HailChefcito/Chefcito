<?php
include_once("inicio/class/class.php");
include_once("../conex/conexion.php");

$usar_db = new DBControl();

if (isset($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["txtcantidad"])) {
                $idPlatos = $_GET["idPlatos"];
                $plato = $usar_db->platosquery("SELECT * FROM platos WHERE idPlatos = '$idPlatos'");
                
                if ($plato) {
                    $nom_plato = $plato[0]["nombrePlatos"];
                    $id_plato = $plato[0]["idPlatos"];
                    $txtcantidad = $_POST["txtcantidad"];
                    $valor_plato = $plato[0]["valorPlatos"];
                    
                    $plato_info = [
                        'nom_plato' => $nom_plato,
                        'id_plato' => $id_plato,
                        'txtcantidad' => $txtcantidad,
                        'valor_plato' => $valor_plato
                    ];
                    
                    if (isset($_SESSION["items_bandeja"])) {
                        if (isset($_SESSION["items_bandeja"][$id_plato])) {
                            $_SESSION["items_bandeja"][$id_plato]["txtcantidad"] += $txtcantidad;
                        } else {
                            $_SESSION["items_bandeja"][$id_plato] = $plato_info;
                        }
                    } else {
                        $_SESSION["items_bandeja"][$id_plato] = $plato_info;
                    }
                }
            }
            break;

        case "delete":
            if (isset($_SESSION["items_bandeja"])) {
                $eliminarcode = $_GET["eliminarcode"];
                if (isset($_SESSION["items_bandeja"][$eliminarcode])) {
                    unset($_SESSION["items_bandeja"][$eliminarcode]);
                }
                if (empty($_SESSION["items_bandeja"])) {
                    unset($_SESSION["items_bandeja"]);
                }
            }
            break;

        case "default":
            unset($_SESSION["items_bandeja"]);
            break;

        case "pay":
            
             
                
            //Primera acción ( Genera el pedido simple)
                session_start();
                    $email = $_SESSION['usuarioAct'];
                    $fechaped = date('Y-m-d');
                    $horaped = date('h:i:s A');
                    $valorped = $_POST['totprecio'];
                    //tener cuidado dado que un valor se toma en otra tabla
                    mysqli_query($conn, "INSERT INTO pedidos(emailUsuario, fechaPedido, horaPedido, valorPedido) VALUES ('$email','$fechaped','$horaped','$valorped')");
            
            //Segunda acción (Genera el pedido + producto mediante una SESSION donde se guardo los datos de los platos ingresados al carro)
                
                if (isset($_SESSION["pedidoDetalles"])) {
                    $pedidoDetalles = $_SESSION["pedidoDetalles"]; // Recupera los detalles del pedido
                        $mosidped=mysqli_query($conn, "SELECT idPedidos FROM pedidos ORDER BY idPedidos DESC ");//Aca se busca la id del pedido recien registrado
                        $idped  = mysqli_fetch_assoc($mosidped)['idPedidos'];
                    foreach ($pedidoDetalles as $detalle) {
                        $idplato = $detalle['idplato'];
                        $cantidadped = $detalle['cantidad'];
                        $precioun = $detalle['preciouni'];
                        mysqli_query($conn, "INSERT INTO pedidoproducto(idPedidos, idPlatos, cantidadPedidosPlatos, precioUnitarioPedidoPlatos, totalPedidoPlatos) VALUES ('$idped','$idplato','$cantidadped','$precioun','$valorped')");
                    }
                    //aca se redireccionara a generar una venta y la salida llevando la cantidad, la id del pedido y el precio total
                    header("Location: pedidos/addventa_salida.php?idpedido=$idped&precioventa=$valorped");
                    
                    // Limpia la sesión después de procesar el pedido
                    unset($_SESSION["items_bandeja"]);
                    unset($_SESSION["pedidoDetalles"]);
                } else {
                    header('Location: ../error.php');
                }
                break;
        }
    }
    ?>