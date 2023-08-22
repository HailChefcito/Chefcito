<div class="container-fluid">
    <form class="d-flex" method= "POST">
        <input class="form-control me-2" type="search" placeholder="Platos" aria-label="Search" name="txtbuscar">
        <button class="btn btn-outline-success" type="submit" name="btnbuscar">Buscar</button>
    </form>
</div>
<?php   
  if(isset($_POST['btnbuscar']))
  {
    $buscar=$_POST['txtbuscar'];
    $querychefcito=mysqli_query($conn, "SELECT nombrePlatos,idCategPlatos,descripcionPlatos, valorPlatos FROM platos WHERE nombrePlatos LIKE '".$buscar."%'");
  }else{
    $querychefcito=mysqli_query($conn, "SELECT nombrePlatos,idCategPlatos,descripcionPlatos, valorPlatos FROM platos ORDER BY nombrePlatos ASC");
  }


  $ntabla=0;


  while($mostrar = mysqli_fetch_array($querychefcito))
  {
    $ntabla++;

  }
?> 