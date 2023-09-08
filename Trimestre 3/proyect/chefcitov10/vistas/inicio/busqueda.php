<div class="container-fluid">
    <form class="d-flex" method= "POST">
        <input class="form-control me-2" type="search" placeholder="Buscar Plato" aria-label="Search" name="txtbuscar" style="width: 200px; ">
        <button class='btn btn-success' type="submit" name="btnbuscar">Buscar</button>
    </form>
</div>
<?php 
if (isset($_POST['btnbuscar'])){
  $_SESSION['buscar']=$_POST['txtbuscar'];
}
  
?>
