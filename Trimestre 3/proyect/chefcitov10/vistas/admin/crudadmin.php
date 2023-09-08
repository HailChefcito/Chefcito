<?php include_once("../conex/conexion.php");?>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Modidicar Usuario</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Registro</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<?php 
  if(isset($_POST['btnbuscar']))
  {
    $buscar=$_POST['txtbuscar'];
    $querychefcito=mysqli_query($conn, "SELECT numeroTelefono,nombreUsuario,apellidoUsuario,direccion,emailUsuario,idSexoUsuario,idTipoUsuario,contraseña FROM usuarios WHERE numeroTelefono  LIKE '".$buscar."%'");
  }else{
    $querychefcito=mysqli_query($conn, "SELECT numeroTelefono,nombreUsuario,apellidoUsuario,direccion,emailUsuario,idSexoUsuario,idTipoUsuario,contraseña FROM usuarios ORDER BY numeroTelefono  ASC");
  }
  while($mostrar = mysqli_fetch_array($querychefcito))
  {
       $numeroTelefono  = $mostrar['numeroTelefono'];
       $nombreUsuario = $mostrar['nombreUsuario'];
       $apellidoUsuario = $mostrar['apellidoUsuario'];
       $direccion = $mostrar['direccion'];
       $emailUsuario = $mostrar['emailUsuario'];
       $idSexoUsuario  = $mostrar['idSexoUsuario'];
       $idTipoUsuario  = $mostrar['idTipoUsuario'];
       $contraseña = $mostrar['contraseña'];


       $querytipousur=mysqli_query($conn, "SELECT * FROM tipousuario WHERE idTipoUsuario='$idTipoUsuario'");

       while($fila1 = mysqli_fetch_array($querytipousur))
  {
    $tipoUsur=$fila1['nombreTipoCliente'];
  }
      
        echo"<div class='offcanvas-body'>";
        echo"<form>";
        echo"<div class='raya'></div>";
        echo"<h1><center>Registro</center></h1>";
        echo"<div class='raya'></div>";
        echo"<label ><h6>N° de telefono:  ".$numeroTelefono."</h6></label><br>";
        echo"<label ><h6>Nombres: ".$nombreUsuario."</h6></label><br>";
        echo"<label ><h6>Apellido: ".$apellidoUsuario."</h6></label><br>";
        echo"<label ><h6>Tipo de usuario: ".$tipoUsur."</h6></label><br>";
        echo"<label><h6>Dirrecion:  ".$direccion."</h6></label><br>";
        echo"<label ><h6>Correo: ".$emailUsuario."</h6></label><br>";

        echo"<center>";
        echo "<a class='btn btn-outline-success' href=\"admin/modificarUsuarioadmin.php?emailModUsu=$emailUsuario\">Modificar</a>";
        echo "<a class='btn btn-outline-success'href =\"admin/eliminarusuario.php?emailModUsu=$emailUsuario\"onClick=\"return confirm('¿Estas seguro de eliminar a $numeroTelefono?')\">Eliminar</a>" ;
        echo"</center>";
          
      echo"</div>";
  }
    
?>
