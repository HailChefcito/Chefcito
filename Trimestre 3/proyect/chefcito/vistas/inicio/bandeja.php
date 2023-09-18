<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?php
if(isset($_SESSION["items_bandeja"]))
{
        $totcantidad = 0;
        $totprecio = 0;
        $pedidoDetalles = array();
    ?>	
    <div class='raya'></div>
    <table class="table">
    <tr>
        <th >Nombre del plato</th>
        <th >Cantidad</th>
        <th >Precio por cantidad</th>
        <th ><a class="btn btn-outline-success"  href="inicio.php?action=default">Limpiar</a></th>
    </tr>	
    <?php		
        foreach ($_SESSION["items_bandeja"] as $plato)
        {
            $plato_price = $plato["txtcantidad"]*$plato["valor_plato"];
            $pedidoDetalles[] = array(
                "idplato"=> $plato["id_plato"],
                "nombre_plato" => $plato["nom_plato"],
                "cantidad" => $plato["txtcantidad"],
                "preciouni" => $plato["valor_plato"],
                "precio_por_cantidad" => $plato_price
            );  
    ?>
            <tr>
                <td><?php echo $plato["nom_plato"]; ?></td>
                <td><?php echo $plato["txtcantidad"]; ?></td>
                <td><?php echo "$ ". number_format($plato_price); ?></td>
                <th><a class="btn btn-outline-success"  href="inicio.php?action=delete&eliminarcode=<?php echo $plato["id_plato"];  ?>">Eliminar</a></th>
            </tr>
            
    <?php
            $totcantidad += $plato["txtcantidad"];
            $totprecio += ($plato["valor_plato"]*$plato["txtcantidad"]);
            $_SESSION["pedidoDetalles"] = $pedidoDetalles;
        }
    ?>

    <tr>
    <form action="../vistas/inicio.php?action=pay" method="post" onsubmit="return confirmarEnvio()"><!--onsubmit genera una funcion para script-->
        <td ><b>Total a pagar:</b></td>
        <td><b><?php echo $totcantidad; ?></b></td>
        <td><strong><?php echo "$ ".number_format($totprecio); ?></strong></td>
            <input type="hidden" name="totprecio" value="<?php echo $totprecio; ?>">
        <td><input type="submit" class="btn btn-outline-success" value="Pagar" ></td>
        </form>
        <script>
        function confirmarEnvio() {
            if (confirm('¿Estás seguro de que deseas conprar esto?')) {
                mostrarAgradecimiento();
                return true; // Envía el formulario
            }
            return false; // No envía el formulario si se cancela la confirmación
            }
            function mostrarAgradecimiento() {
                alert('¡Gracias por su compra!! :)');
            }
        </script>
    </tr>

    </table>		
    <?php
} else {
    ?>
    <div align="center"><h3>Pidamos algo para comer! </h3></div>

    
<?php 
}
?>