<?php
 include_once('../../conex/conexion.php');
 $queryMostrar2 = mysqli_query($conn, "SELECT numeroTelefono FROM usuarios");
?>

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
        <form action="addped.php" method="post">
            <hr color="transparent">
            <label for="intidped">Id pedido</label><br>
                <input type="number" name="intidped" max="999"><br>
            <label for="number">Numero Telefono</label><br>
                <select name="numer" style="width:50%;">
                    <option>---</option>
                    <?php 
                        while($mostrar2 = mysqli_fetch_array($queryMostrar2))
                            {
                                $options = $mostrar2['numeroTelefono'];
                                echo "<option value='".$options."'>".$options."</option>";
                            }
                    ?>  
                </select><br>
            <label for="txtdate">Fecha</label><br>
                <?php
                    $feped= date('Y-m-d');
                    echo "<input type='date' name='txtdate' value=".$feped.">";
                ?><br>
            <label for="txthour">Hora</label><br>
                <?php
                    $hrped= date('h:i:s A');
                    echo "<input type='hour' name='txthour' value=".$hrped.">";
                ?><br>
            <label for="valueped">Valor del Pedido</label><br>
                <input type="number" max="9999999" name="valueped">
            <hr style=" width:90%; color:transparent;">
            <input type="submit" value="Agregar" style="font-family: comic sans ms; width: 150px">
            <a href="pedido.php" class="vamo">Volver</a>
        </form>
    </div>
 </body>
 </html>