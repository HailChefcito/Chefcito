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
                $querychefcito=mysqli_query($conn, "SELECT nombreUsuario, emailUsuario FROM usuarios");
                $mostrar = mysqli_fetch_array($querychefcito);
                {
                echo"<tr><th><img class='icon' src='../resources/informacion.png'alt=''>___</th>";
                echo"<td>".$mostrar['nombreUsuario']."</td>";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"<th><img class='icon' src='../resources/telefono.png'alt=''>___</th>";
                echo"<td>".$mostrar['emailUsuario']."</td>";
                }
            ?>
            <?php
            $querychefcito=mysqli_query($conn, "SELECT emailUsuario, descripcionSugerencia, valoracionSugerencia FROM sugerencia");
            while($mostrar = mysqli_fetch_array($querychefcito))
            {

            echo"<table class='table'>";
            echo"<tr>";
            echo"<td>Sugerencia</td>";

            echo"<td >Valoración</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td >Correo: ".$mostrar['emailUsuario']."</td>";
            echo"<td colspan='2'>".$mostrar['valoracionSugerencia']."</td>";
            echo"</tr>";
            echo"<tr>";
            echo"<td colspan='3'>".$mostrar['descripcionSugerencia']."</td>";
            echo"</tr>";
            echo"</table>";
            echo"<table class='table'>";
            echo"<tr>";
            echo"<td><a class='btn btn-outline-success' href=\"modisuge.php?emailUsuario=$mostrar[emailUsuario]\">Editar</a>";
            echo"<td><a class='btn btn-outline-success' href =\"eliminar.php?emailUsuario=$mostrar[emailUsuario]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[emailUsuario]?')\">Eliminar</a></td>" ;
            echo"<td><a class='btn btn-outline-success' href =\"registarsuge.php?emailUsuario=$mostrar[emailUsuario]\"onClick=\"return confirm('¿Vas a subir un sugerencia $mostrar[emailUsuario]?')\">sugerencia</a></td>";
            echo"</tr>";
            echo"</table>";
            }
        ?>
        </blockquote>
        </figure>
    </div>
    </div> 
</div>