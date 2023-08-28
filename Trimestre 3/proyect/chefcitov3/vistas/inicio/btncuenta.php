<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class="icono"src="../resources/icono.jpeg"alt="" ></button>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <div class="offcanvas-body">
        <figure class="text-center">
        <blockquote class="blockquote">
            <p>informacion del cliente</p>
            <?php
                $querychefcito=mysqli_query($conn, "SELECT nombreUsuario, numeroTelefono FROM usuarios");
                $mostrar = mysqli_fetch_array($querychefcito);
                {
                echo"<tr><th><img class='icon' src='../resources/informacion.png'alt=''>___</th>";
                echo"<td>".$mostrar['nombreUsuario']."</td>";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"<th><img class='icon' src='../resources/telefono.png'alt=''>___</th>";
                echo"<td>".$mostrar['numeroTelefono']."</td>";
                }
            ?>
            <?php
            $querychefcito=mysqli_query($conn, "SELECT numeroTelefono, descripcionSugerencia, valoracionSugerencia FROM sugerencia");
            while($mostrar = mysqli_fetch_array($querychefcito))
            {

            echo"<table class='table'>";
            echo"<tr>";
            echo"<th><h3>Sugerencia#</h3></th>";
            echo"<th>|</th>";
            echo"<th >Valoración</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th >Numero: ".$mostrar['numeroTelefono']."</th>";
            echo"<th colspan='2'>".$mostrar['valoracionSugerencia']."</th>";
            echo"</tr>";
            echo"<tr>";
            echo"<th colspan='3'>".$mostrar['descripcionSugerencia']."</th>";
            echo"</tr>";
            echo"</table>";
            echo"<table class='table'>";
            echo"<tr>";
            echo"<td><a class='btn btn-outline-success' href=\"modisuge.php?numeroTelefono=$mostrar[numeroTelefono]\">Editar</a>";
            echo"<td><a class='btn btn-outline-success' href =\"eliminar.php?numeroTelefono=$mostrar[numeroTelefono]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[numeroTelefono]?')\">Eliminar</a></td>" ;
            echo"<td><a class='btn btn-outline-success' href =\"registarsuge.php?numeroTelefono=$mostrar[numeroTelefono]\"onClick=\"return confirm('¿Vas a subir un sugerencia $mostrar[numeroTelefono]?')\">sugerencia</a></td>";
            echo"</tr>";
            echo"</table>";
            }
        ?>
        </blockquote>
        </figure>
    </div>
    </div> 
</div>