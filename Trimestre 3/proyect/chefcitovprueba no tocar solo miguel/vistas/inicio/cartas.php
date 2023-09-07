<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?php   
if(isset($_POST['btnbuscar']))
{
    $buscar=$_POST['txtbuscar'];
    //consulta para imprimir en el inicio
    $querychefcito=mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos LIKE '".$buscar."%'");

    //consulta con la clase para la bandeja de platos
    $array_platos = $usar_db->platosquery("SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos LIKE '".$buscar."%'");
  }else{
    //consulta para imprimir en el inicio
    $querychefcito=mysqli_query($conn, "SELECT  categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER by platos.nombrePlatos ASC;");

    //consulta con la clase para la bandeja de platos
    $array_platos = $usar_db->platosquery("SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER BY `platos`.`idCategPlatos` ASC;");
  }



 

if (!empty($array_platos)) 
{ $ntabla=0;
  foreach($array_platos as $i=>$k)
  {
     $ntabla=0;
    $ntabla++;
    echo "<div id='imprimeInfo'>";
    echo "<tr>";
    echo "<form method='POST' action='inicio.php?action=add&idPlatos= ".$array_platos[$i]['idPlatos']; "'>";
    echo"<table class='table'>";
    echo "<td>";
    echo "
      <center>
        <div class='card mb-3' style='max-width: 70%;margin-top:15px;'>
          <div class='row g-0' >
            <div class='col-md-4'>
              <img src='../resources/caffe.jpg' class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-8'>
              <div class='card-body'>
                <h5 class='card-title' style='margin-top:50px;'><h3>".$array_platos[$i]['nombrePlatos']."</h3></h5>
                <p class='card-text'><small class='text-body-secondary'><h6>Categoria: ".$array_platos[$i]['nombreCategorias']."</h6></small></p>
                <p class='card-text'><h5>".$array_platos[$i]['descripcionPlatos']."</h5></p>
                <p class='card-text'><h6>Valor: $".$array_platos[$i]['valorPlatos']."</h6></small></p>
              </div>
            </div>
          </div>
        </div>
        <!-- este es el esquema de una carta. se debe repetir únicamente con un while -->";
    echo "<td><input class='btn btn-success' type='number' name='txtcantidad' value='1'  />";
    echo "<td><input class='btn btn-outline-light' type='submit' value='Agregar'/></td>" ;
    echo "</center>";
    echo"</table>";
    echo "</form>";
  }
}else{
  echo "<center><h2>Al parecer no hay un plato que conicida con tu busqueda. A probar otra cosa!</h2></center>";
}
?> 
