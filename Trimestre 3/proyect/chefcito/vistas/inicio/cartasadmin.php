<?php

// Verifica si se ha enviado un formulario de búsqueda

if (isset($_POST['btnbuscar'])) {
    $buscar = $_POST['txtbuscar'];
    $querychefcito = mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos LIKE '%" . $buscar . "%'");
} elseif (isset($_GET['categoria'])) {
    $categoriaSeleccionada = $_GET['categoria'];
    $querychefcito = mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE categorias.nombreCategorias = '$categoriaSeleccionada'");
} else {
    // consulta original cuando no se busca ni se selecciona una categoría
    $querychefcito = mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER by platos.nombrePlatos ASC;");
}

$array_platos = $usar_db->platosquery("SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER BY `platos`.`idCategPlatos` ASC;");

?>
    <!-- Barra de navegación con las categorías -->
    <nav>
    <ul class="pagination">

        <li class="page-item"><a class='btn btn-success' href="?categoria=Bebidas">Bebidas</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Entradas">Entradas</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Postre">Postre</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Platos%20Fuertes">Platos Fuertes</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Acompañamiento">Acompañamiento</a></li>
    </ul>
</nav>
 
<?php
 if (!empty($array_platos)) {
     $ntabla = 0;
     foreach ($array_platos as $i => $k) {
         // Verificar si se realiza una búsqueda de texto
         $textoCoincide = isset($_POST['btnbuscar']) && stripos($array_platos[$i]['nombrePlatos'], $buscar) !== false;

         // Verificar si se ha seleccionado una categoría
         $categoriaCoincide = isset($_GET['categoria']) && strcasecmp($_GET['categoria'], $array_platos[$i]['nombreCategorias']) === 0;

         // Continuar si cualquiera de las dos condiciones se cumple
         if ($textoCoincide || $categoriaCoincide) {
             $ntabla++;
             echo "<div id='imprimeInfo'>";
             echo "<tr>";
             echo"<table>";
             echo "<a>".$mostrar['idPlatos']."</a>";
             echo "<td><h1>".$ntabla."</h1></td>";
             echo "<td>";
             echo "
               <center>
                 <div class='card mb-3' style='max-width: 70%;'>
                   <div class='row g-0'>
                     <div class='col-md-4'>
                       <img src='../resources/caffe.jpg' class='img-fluid rounded-start' alt='...'>
                     </div>
                     <div class='col-md-8'>
                       <div class='card-body'>
                         <h5 class='card-title'>".$mostrar['nombrePlatos']."</h5>
                         <p class='card-text'><small class='text-body-secondary'>".$mostrar['idCategPlatos']."</small></p>
                         <p class='card-text'>".$mostrar['descripcionPlatos']."</p>
                         <p class='card-text'><small class='text-body-secondary'>".$mostrar['valorPlatos']."</small></p>
                       </div>
                     </div>
                   </div>
                 </div>
               </center>
             ";
             echo "<td style='width=26%'><a href=\"platos/modificar.php?idPlatos=$mostrar[idPlatos]\">Modificar</a>";
             echo "<th><a href =\"platos/eliminar.php?idPlatos=$mostrar[idPlatos]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[nombrePlatos]?')\">Eliminar</a></th>" ;
             echo"</table>";  
         }
     }
     if ($ntabla === 0) {
         echo "<center><h2>No se encontraron platos que coincidan con tu búsqueda o categoría seleccionada.</h2></center>";
     }
 } else {
     echo "<center><h2>No se encontraron platos disponibles.</h2></center>";
 }
 ?>
</body>
</html>
