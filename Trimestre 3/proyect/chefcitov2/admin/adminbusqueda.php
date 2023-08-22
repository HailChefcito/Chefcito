<div class="container-fluid">
    <form class="d-flex" method= "POST">
        <input class="form-control me-2" type="search" placeholder="Usarios" aria-label="Search" name="txtbuscarusuario">
        <button class="btn btn-outline-success" type="submit" name="btnbuscarusuario">Buscar</button>
    </form>
</div>
<?php 
  if(isset($_POST['btnbuscarusuario']))
  {
    $buscar=$_POST['txtbuscarusuario'];
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
      }
    
?>
