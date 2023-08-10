<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php
            $querychefcito=mysqli_query($conn, "SELECT nombreUsuario, numeroTelefono FROM usuarios");
            $mostrar = mysqli_fetch_array($querychefcito);
            $numerofila = 0;
            {
            $numerofila++;
            echo"<div class='raya'></div>";
            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Orden".$numerofila."#</h3></th>";
            echo"<th>|</th>";
            echo"<th >cantidad</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"</table>";

            echo"<div class='raya'></div>";
            
            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Postres".$numerofila."#</h3></th>";
            echo"<th>|</th>";
            echo"<th >cantidad</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</table>"; 

            echo"<div class='raya'></div>";

            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Bebida".$numerofila."#</h3></th>";
            echo"<th>|</th>";
            echo"<th >cantidad</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='2'>platos</th>";
            echo"<th >#</th>";
            echo"</tr>";
            echo"</table>";
            echo"<div class='raya'></div>";
            echo"<table class='table'>";
            echo"<td>Total a pagar</td>";
            echo"<td>=</td>";
            echo"<td>$  </td>";
            echo"</table>";
            }
        ?>