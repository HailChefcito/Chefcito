<div class="container-fluid">
    <form class="d-flex" method= "POST">
        <input class="form-control me-2" type="search" placeholder="Buscar Plato" aria-label="Search" name="txtbuscar" style="width: 200px; ">
        <button class='btn btn-success' type="submit" name="btnbuscar">Buscar</button>
    </form>
</div>
<?php
  if(isset($_POST['btnbuscar']))
  {
    $buscar=$_POST['txtbuscar'];
    $querychefcito=mysqli_query($conn, "SELECT categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias JOIN platos ON categorias.idCategPlatos = platos.idCategPlatos WHERE platos.nombrePlatos LIKE '%".$buscar."%';");
  }else{
    $querychefcito=mysqli_query($conn, "SELECT  categorias.nombreCategorias, platos.nombrePlatos, platos.idPlatos, platos.descripcionPlatos, platos.valorPlatos FROM categorias, platos WHERE categorias.idCategPlatos = platos.idCategPlatos ORDER by platos.nombrePlatos ASC;");
  }



?> 