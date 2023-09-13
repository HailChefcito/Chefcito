<?php

// Verifica si se ha enviado un formulario de búsqueda


if (isset($_POST['btnbuscar'])) {
    $buscar = $_POST['txtbuscar'];
    $querychefcito = mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos ORDER BY platos.nombrePlatos ASC LIKE '%" . $buscar . "%' ");
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
   
    <div class="pagina">
    <nav>
    <ul class="pagination">

        <li class="page-item"><a class='btn btn-success' href="?categoria=Bebida">Bebidas</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Entradas">Entradas</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Postre">Postre</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Plato%20Fuerte">Platos Fuertes</a></li>
        <li class="page-item"><a class='btn btn-success' href="?categoria=Acompañamiento">Acompañamiento</a></li>
    </ul>
    </nav>
    </div>

 
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
             echo "<form method='POST' action='inicio.php?action=add&idPlatos=" . $array_platos[$i]['idPlatos'] . "'>";
             echo "<center>";
             echo "<div class='card mb-3' style='max-width: 70%;margin-top:15px;'>";
             echo "<div class='row g-0' >";
             echo "<div class='col-md-4'>";
             echo "<img src='../resources/caffe.jpg' class='img-fluid rounded-start' alt='...'>";
             echo "</div>";
             echo "<div class='col-md-8'>";
             echo "<div class='card-body'>";
             echo "<h5 class='card-title' style='margin-top:50px;'><h3>" . $array_platos[$i]['nombrePlatos'] . "</h3></h5>";
             echo "<p class='card-text'><small class='text-body-secondary'><h6>Categoria: " . $array_platos[$i]['nombreCategorias'] . "</h6></small></p>";
             echo "<p class='card-text'><h5>" . $array_platos[$i]['descripcionPlatos'] . "</h5></p>";
             echo "<p class='card-text'><h6>Valor: $" . $array_platos[$i]['valorPlatos'] . "</h6></small></p>";
             echo "</div>";
             echo "</div>";
             echo "</div>";
             echo "</div>";
             echo "<td><input class='btn btn-success' type='number' name='txtcantidad' value='1'  />";
             echo "<td><input class='btn btn-outline-light' type='submit' value='Agregar'/></td>";
             echo "</center>";
             echo "</form>";
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



