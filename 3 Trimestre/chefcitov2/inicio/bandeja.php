<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php
            $querychefcito=mysqli_query($conn, "SELECT nombrePlatos,idPlatos,valorPlatos FROM platos");
            $mostrar = mysqli_fetch_array($querychefcito);
            $numerofila = 0;
            {
            $numerofila++;
            echo"<div class='raya'></div>";
            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Orden".$numerofila."#</h3></th>";
            echo"<th>|</th>";
            echo"<th >Precio</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"</table>";
            echo "<td style='width=26%'><a href=\"modificar.php?nombrePlatos=$mostrar[nombrePlatos]\">Modificar</a>";
            echo "<th><a href =\"eliminar.php?nombrePlatos=$mostrar[nombrePlatos]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[nombrePlatos]?')\">Eliminar</a></th>" ;
            echo"</table>";
            echo"<div class='raya'></div>";
            
            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Postres".$numerofila."#</h3></th>";
            echo"<th>|</th>";  
            echo"<th >Precio</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"</table>";
            echo "<td style='width=26%'><a href=\"modificar.php?nombrePlatos=$mostrar[nombrePlatos]\">Modificar</a>";
            echo "<th><a href =\"eliminar.php?nombrePlatos=$mostrar[nombrePlatos]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[nombrePlatos]?')\">Eliminar</a></th>" ;
            echo"</table>";
            echo"<div class='raya'></div>";

            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Bebida".$numerofila."#</h3></th>";
            echo"<th>|</th>";
            echo"<th >Precio</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>".$mostrar['nombrePlatos']."</th>";
            echo"<th >".$mostrar['valorPlatos']."</th>";
            echo"</tr>";
            echo"</table>";
            echo "<td style='width=26%'><a href=\"modificar.php?nombrePlatos=$mostrar[nombrePlatos]\">Modificar</a>";
            echo "<th><a href =\"eliminarusu.php?nombrePlatos=$mostrar[nombrePlatos]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[nombrePlatos]?')\">Eliminar</a></th>" ;
            echo"</table>";
            echo"<div class='raya'></div>";
            echo"<table class='table'>";
            echo"<td>Total a pagar</td>";
            echo"<td>=</td>";
            echo"<td>$  </td>";
            echo"</table>";
            }
        ?>