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
      }
        echo"<div class='offcanvas-body'>";
        echo"<form>";
        echo"<h1>Registro</h1>";
        echo"<label >N° de telefono</label>";
        echo"<input type='number' name='phone' value=".$numeroTelefono." readonly> <BR>";
        echo"<label >Nombres</label>";
        echo"<input type='text' name='name' value=".$nombreUsuario.">";

        echo"<labe++l >Apellido</labe++l>";
        echo"<input type='text' name='lstname' value=".$apellidoUsuario.">";

        echo"<label >Tipo de usuario</label><br>";
        echo"<input  type='radio' name='usuario' value='1' id='cliente' value=".$idTipoUsuario.">";
        echo"<label  >Cliente</label>";
        echo"<input  type='radio'  name='usuario' value='2' id='admin'>";
        echo"<label >Administrador</label><br>";

        echo"<label>Genero</label>
        <select name='genero' id='gene' value=".$idSexoUsuario." required>
        <option value='0'>No Seleccionado</option>
        <option value='1'>Mujer</option>
        <option value='2'>Hombre</option>
        </select>";

        echo"<label>Dirrecion</label>";
        echo"<input type='text' name='address' value=".$direccion."required readonly>";
        echo"<label >Correo</label>";
        echo"<input type='text' name='email' value=".$emailUsuario." required readonly>";
        echo"<label >Contraseña</label><br>";
        echo"<input type='password' name='password' value=".$contraseña."required readonly><br>";
        echo"<center>";
        echo "<td><a class='btn btn-outline-success' href=\"admin/moduser.php?numeroTelefono=$numeroTelefono\">Modificar</a>";
        echo "<th><a class='btn btn-outline-success'href =\"admin/eliminarusuario.php?numeroTelefono=$numeroTelefono\"onClick=\"return confirm('¿Estas seguro de eliminar a $numeroTelefono?')\">Eliminar</a></th>" ;
        echo"</center>";
          
      echo"</div>";
      echo"</div>"; 
    
?>
