<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

<?php   
  if(isset($_POST['btnbuscar']))
  {
    $buscar=$_POST['txtbuscar'];
    $querychefcito=mysqli_query($conn, "SELECT idPlatos,nombrePlatos,idCategPlatos,descripcionPlatos, valorPlatos FROM platos WHERE nombrePlatos LIKE '".$buscar."%'");
  }else{
    $querychefcito=mysqli_query($conn, "SELECT idPlatos,nombrePlatos,idCategPlatos,descripcionPlatos, valorPlatos FROM platos ORDER BY nombrePlatos ASC");
  }


  $ntabla=0;


  while($mostrar = mysqli_fetch_array($querychefcito))
  {
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
?>