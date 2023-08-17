<?php include_once("conexion.php");?>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Sugerencias</button>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Sugerencias del usuario</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php
            $querychefcito=mysqli_query($conn, "SELECT numeroTelefono, descripcionSugerencia, valoracionSugerencia FROM sugerencia");
            while($mostrar = mysqli_fetch_array($querychefcito))
            {
            echo"<div class='raya'></div>";
            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Sugerencia#</h3></th>";
            echo"<th>|</th>";
            echo"<th >Valoración</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th >Numero: ".$mostrar['numeroTelefono']."</th>";
            echo"<th >".$mostrar['valoracionSugerencia']."</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='3'>".$mostrar['descripcionSugerencia']."</th>";
            echo"</tr>";
            echo"</table>";
            echo "<td style='width=26%'><a href=\"modisuge.php?numeroTelefono=$mostrar[numeroTelefono]\">Modificar</a>";
            echo "<th><a href =\"eliminar.php?numeroTelefono=$mostrar[numeroTelefono]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[numeroTelefono]?')\">Eliminar</a></th>" ;
            echo"</table>";
            }
        ?>
  </div>
</div>