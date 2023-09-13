<?php
include_once("inicio/class/class.php");

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
            echo "<script> alert('Gracias por su compra :)'); window.location= 'inicio.php' </script>";
            unset($_SESSION["items_bandeja"]);
            break;
    }
}
?>