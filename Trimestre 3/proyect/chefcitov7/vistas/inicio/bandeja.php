<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?php
if(isset($_SESSION["items_bandeja"]))
{
        $totcantidad = 0;
        $totprecio = 0;
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
    ?>
            <tr>
                <td><?php echo $plato["nom_plato"]; ?></td>
                <td><?php echo $plato["txtcantidad"]; ?></td>
                <td><?php echo "$ ". number_format($plato_price); ?></td>
                <th><a class="btn btn-outline-success"  href="inicio.php?action=delete&eliminarcode=<?php echo $plato["id_plato"]; ?>">Eliminar</a></th>
            </tr>
    <?php
            $totcantidad += $plato["txtcantidad"];
            $totprecio += ($plato["valor_plato"]*$plato["txtcantidad"]);
        }
    ?>

    <tr>
        <td ><b>Total a pagar:</b></td>
        <td><b><?php echo $totcantidad; ?></b></td>
        <td><strong><?php echo "$ ".number_format($totprecio); ?></strong></td>
        <td><a  class="btn btn-outline-success" href="inicio.php?action=pay">Pagar</a></td>
    </tr>

    </table>		
    <?php
} else {
    ?>
    <div align="center"><h3>Pidamos algo para comer! </h3></div>
<?php 
}
?>