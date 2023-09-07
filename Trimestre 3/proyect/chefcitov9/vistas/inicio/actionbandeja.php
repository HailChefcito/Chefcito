<?php
include_once("inicio/class/class.php");

$usar_db = new DBControl();

if(!empty($_GET["action"])) 
{
    switch($_GET["action"]) 
    {
        case "add":
            if(!empty($_POST["txtcantidad"])) 
            {
                $codplato = $usar_db->platosquery("SELECT * FROM platos WHERE idPlatos ='".$_GET["idPlatos"]."'");
                $platos_array = array(
                    $codplato[0]["idPlatos"] => array(
                        'nom_plato'   => $codplato[0]["nombrePlatos"],
                        'id_plato'    => $codplato[0]["idPlatos"],
                        'txtcantidad' => $_POST["txtcantidad"],
                        'valor_plato' => $codplato[0]["valorPlatos"]
                    )
                );
                
                
                if(!empty($_SESSION["items_bandeja"])) 
                {
                    if(in_array($codplato[0]["idPlatos"],
                    array_keys($_SESSION["items_bandeja"]))) 
                    {
                        foreach($_SESSION["items_bandeja"] as $i => $j) 
                        {
                            if($codplato[0]["idPlatos"] == $i) 
                            {
                                if(empty($_SESSION["items_bandeja"][$i]["txtcantidad"])) 
                                {
                                    $_SESSION["items_bandeja"][$i]["txtcantidad"] = 0;
                                }
                                $_SESSION["items_bandeja"][$i]["txtcantidad"] += $_POST["txtcantidad"];
                            }
                        }
                    } 
                    else 
                    {
                        $_SESSION["items_bandeja"] = array_merge($_SESSION["items_bandeja"],$platos_array);
                    }
                } 
                else 
                {
                    $_SESSION["items_bandeja"] = $platos_array;
                }
            }
        break;

        case "delete":
            if(!empty($_SESSION["items_bandeja"])) 
            {
                foreach($_SESSION["items_bandeja"] as $i => $j) 
                {
                    if($_GET["eliminarcode"] == $i)
                    {
                        unset($_SESSION["items_bandeja"][$i]);	
                    }			
                    if(empty($_SESSION["items_bandeja"]))
                    {
                        unset($_SESSION["items_bandeja"]);
                    }
                }
            }
        break;

        case "default":
            unset($_SESSION["items_bandeja"]);
        break;	

        case "pay":
            echo "<script> alert('Gracias por su compra :)');window.location= 'inicio.php' </script>";
            unset($_SESSION["items_bandeja"]);
        
        break;	
    }
}
?>