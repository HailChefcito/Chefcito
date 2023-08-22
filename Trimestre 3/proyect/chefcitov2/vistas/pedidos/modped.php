<?php
  include_once("../../conex/conexion.php");

  $idPed=$_GET['idPedido'];
  $queryMostrar2 = mysqli_query($conn, "SELECT numeroTelefono FROM usuarios");
  $querypedi = mysqli_query($conn, "SELECT idPedidos, numeroTelefono, fechaPedido, horaPedido, valorPedido FROM pedidos WHERE idPedidos='$idPed'");

    while($mostrar = mysqli_fetch_array($querypedi))
    {
        $numtel = $mostrar['numeroTelefono'];
        $fecped = $mostrar['fechaPedido'];
        $horaped =$mostrar['horaPedido'];
        $valorped=$mostrar['valorPedido'];
    }
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../styles/style.css">
     <title>Pedido</title>
     
 </head>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../../styles/style.css">
     <title>Agregar Ped</title>
     
 </head>
    <body background="../../resources/chefcito.jpg" >
        <div class="ped3"> 
            <form method="post">
                <hr color="transparent">
                <label for="intidped">Id pedido</label><br>
                    <input type="number" name="intidped" max="999" value="<?php echo $idPed;?>" disabled><br>
                <label for="numer1">Numero Telefono</label><br>
                    <select name="numer1" style="width:50%;">
                        <option value="<?php echo $numtel;?>"><?php echo $numtel;?></option>
                        <?php 
                            while($mostrar2 = mysqli_fetch_array($queryMostrar2))
                                {
                                    $options = $mostrar2['numeroTelefono'];
                                    echo "<option value='".$options."'>".$options."</option>";
                                }
                        ?>  
                    </select><br>
                <label for="txtdate1">Fecha</label><br>
                    <?php
                        echo "<input type='date' name='txtdate1' value=".$fecped.">";
                    ?><br>
                <label for="txthour1">Hora</label><br>
                    <?php
                        echo "<input type='hour' name='txthour1' value=".$horaped.">";
                    ?><br>
                <label for="valueped1">Valor del Pedido</label><br>
                    <input type="number" max="9999999" name="valueped1" value="<?php echo $valorped;?>">
                <hr style=" width:90%; color:transparent;">
                <input type="submit" name="btnmodif" value="Modificar" onClick="Javascript: return confirm ('¿Deseas modificar este pedido??');" style="font-family: comic sans ms; width: 150px">
                <a href="pedido.php" class="vamo">Volver</a>
            </form>
        </div>
    </body>
 </html>
 <?php
 if(isset($_POST['btnmodif']))
    {
        $numtel1 = $_POST['numer1'];
        $fecped1 = $_POST['txtdate1'];
        $horaped1 =$_POST['txthour1'];
        $valorped1=$_POST['valueped1'];

        $querymodificar = mysqli_query($conn,"UPDATE pedidos SET numeroTelefono='$numtel1',fechaPedido='$fecped1',horaPedido='$horaped1',valorPedido='$valorped1' WHERE idPedidos=$idPed");

        echo "<script>window.location= 'pedido.php' </script>";
    }
?>