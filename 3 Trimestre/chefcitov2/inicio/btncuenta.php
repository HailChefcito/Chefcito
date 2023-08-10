<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img class="icono"src="imagenes/icono.jpeg"alt="" ></button>
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
                echo"<tr><th><img class='icon' src='imagenes/informacion.png'alt=''>___</th>";
                echo"<td>".$mostrar['nombreUsuario']."</td>";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"<th><img class='icon' src='imagenes/telefono.png'alt=''>___</th>";
                echo"<td>".$mostrar['numeroTelefono']."</td>";
                

                }
            ?>
        </blockquote>
        </figure>
    </div>
    </div> 
</div>