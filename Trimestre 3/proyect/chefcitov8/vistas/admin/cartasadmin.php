<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?php   
  if(isset($_POST['btnbuscara']))
  {
    $buscar=$_POST['txtbuscara'];
    $querychefcito=mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos LIKE '".$buscar."%'");
  }else{
    $querychefcito=mysqli_query($conn, "SELECT  categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER by platos.nombrePlatos ASC;");
  }

  $ntabla=0;


  while($mostrar = mysqli_fetch_array($querychefcito))
  {
    $ntabla++;
    echo "<div id='imprimeInfo'>";
    echo "<tr>";
    echo"<table>";
    echo "<td>";
    echo "
      <center>
        <div class='card mb-3' style='max-width: 70%;margin-top:15px;'>
          <div class='row g-0'>
            <div class='col-md-4'>
              <img src='../resources/caffe.jpg' class='img-fluid rounded-start' alt='...'>
            </div>
            <div class='col-md-8'>
              <div class='card-body'>
              <h5 class='card-title'><h3>".$mostrar['nombrePlatos']."</h3></h5>
              <p class='card-text'><small class='text-body-secondary'><h6>".$mostrar['nombreCategorias']."</h6></small></p>
              <p class='card-text'><h5>".$mostrar['descripcionPlatos']."</h5></p>
              <p class='card-text'><h6>Valor: $".$mostrar['valorPlatos']."</h6></small></p>
              </div>
            </div>
          </div>
        </div>
      </center>
    ";
    echo "<td ><a class='btn btn-outline-success'href=\"platos/modificar.php?idPlatos=$mostrar[idPlatos]\">Modificar</a>";
    echo"<br>";
    echo "<td><a class='btn btn-outline-success'href =\"platos/eliminar.php?idPlatos=$mostrar[idPlatos]\"onClick=\"return confirm('¿Estas seguro de eliminar a $mostrar[nombrePlatos]?')\">Eliminar</a></td>" ;
    echo"</table>";
      
  }
?>