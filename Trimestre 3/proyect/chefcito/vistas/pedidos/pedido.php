<?php
 include_once('../../conex/conexion.php');
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../styles/style.css">
     <title>Pedido</title>
     
 </head>
    <body background="../../resources/chefcito.jpg" >
        <div class="ped"> 
            <table  width=98%>
                <tr>
                    <form method="post">
                        <th align="left" style="width:10%;padding-left:50px; padding-top: 2%;"><a href="../admin.php" class="vamo">Volver</a></th>
                        <th align="center" style="width:5%;padding-left:50px; padding-top: 2%;">|</th>
                        <th align="left" style="width:10%;padding-left:50px; padding-top: 2%;"><a href="agrped.php" class="vamo">Agregar</a></th>
                        <th></th>
                        <th align="right" style="width:25%; padding-top: 2%;"><input type="text" name="txtbuscar"></th>
                        <th style="width:15%;padding-top: 2%;"><input type="submit" value="Buscar" name="btnbuscar" style="width:100px"></th>
                    </form>
                </tr>
                <tr>
                    <td colspan=6>
                    <hr color=b3b3b3>
                    <?php
                    if(isset($_POST['btnbuscar']))
                    {   
                        $buscar = $_POST['txtbuscar'];
                        $queryMostrar = mysqli_query($conn, "SELECT idPedidos, emailUsuario, fechaPedido, horaPedido, valorPedido FROM pedidos WHERE idPedidos LIKE '%$buscar%'");
                    }
                    else
                    {
                        $queryMostrar = mysqli_query($conn, "SELECT idPedidos, emailUsuario, fechaPedido, horaPedido, valorPedido FROM pedidos ORDER BY idPedidos ASC");
                    }
                    while($mostrar = mysqli_fetch_array($queryMostrar))
                        {
                            
                            $idpedido    = $mostrar['idPedidos'];
                            $numTelefono = $mostrar['emailUsuario'];
                            $datePedido  = $mostrar['fechaPedido'];
                            $hourPedido  = $mostrar['horaPedido'];
                            $valuePedido = $mostrar['valorPedido'];
                        echo "<table class='ped2' > <tr>";
                        echo "<td width=14%>Id Pedido: ".$idpedido;
                        echo "</td><td width=14%>Numero Telefonico: ".$numTelefono;
                        echo "</td><td width=14%>Fecha: ".$datePedido;
                        echo "</td><td width=14%>Hora: ".$hourPedido;
                        echo "</td><td width=14%>Valor: $".$valuePedido;
                        echo "</td><td width=2%>|</td><td width=14%><a href=\"modped.php?idPedido=$idpedido\" class='af'>Modificar</a>";
                        echo "</td><td width=14%><a href =\"elimped.php?idPedido=$idpedido\"onClick=\"return confirm('¿Estas seguro de eliminar a $idpedido?')\" class='af'>Eliminar</a></td>";
                        echo "</tr></table> ";
                        }  
                    ?>
                    </td> 
                </tr>
                <tr><td><hr style="color:transparent;"></td></tr>
            </table>
        </div>
    </body>
 </html>