<?php

    
  $actual=$_SESSION['usuarioAct'];
  $tipoUsuAct=$_SESSION['tipoUsurAct'];



  $querybuscar = mysqli_query($conn, "SELECT * FROM usuarios WHERE emailUsuario='$actual'");
  
  $querytipouser = mysqli_query($conn, "SELECT nombreTipoCliente FROM tipousuario WHERE idTipoUsuario='$tipoUsuAct'");


  while($fila = mysqli_fetch_array($querytipouser))
 {
    $tipoUsur = $fila['nombreTipoCliente'];

 }
  while($mostrar = mysqli_fetch_array($querybuscar))
 {
    $numero = $mostrar['numeroTelefono'];
    $nombreUsuario = $mostrar['nombreUsuario'];
    $apellidoUsuario = $mostrar['apellidoUsuario'];
    $direccion = $mostrar['direccion'];
    $email = $mostrar['emailUsuario'];
    $sexo = $mostrar['idSexoUsuario'];
    $tipoUser = $mostrar['idTipoUsuario'];
    $contraseña = $mostrar['contraseña'];

 }
 $querysexo = mysqli_query($conn, "SELECT * FROM sexousuario WHERE idSexoUsuario='$sexo'");
 while($filaSexo = mysqli_fetch_array($querysexo))
 {
    $generoEspecifico = $filaSexo['nombreSexoUsuario'];
 }
?> 
        <div class=hola>   <!-- toca poner la clase para el css-->
            <form method="post" >
                <label>Telefono: </label><br>
                <input type="number" name="telefono" value="<?php echo $numero;?>" required><br>

                <label>Nombres: </label>
                <input type="text" name="nomUser" value="<?php echo $nombreUsuario;?>" required>

                <label>Apellidos: </label>
                <input type="text" name="apelUser" value="<?php echo $apellidoUsuario;?>" required>

                <label>Direccion: </label>
                <input type="text" name="direccionUser" value="<?php echo $direccion;?>" required></br>

                <label>Correo: </label>
                <input type="text" name="correoUser" value="<?php echo $email;?>" required></br>

                <!--aqui va para que seleccione el sexo dxd, hay que hacer una consulta xdxdxdxdxdxdxdxd, o no, nose xdxdxdxdxd -->

                <label>Sexo: </label>
                <select name="genero" id="gene" required>
                  <option value="0">No Seleccionado</option>
                  <option value="1">Mujer</option>
                  <option value="2">Hombre</option>
                </select>

                <label class="label2">tipo de usuario, eres<?php echo $tipoUsur;?>(no se puede cambiar) </label><!--En esta linea la idea es que el usuario sepa que es cliente, por lo tanto el no va a poder cambiar el tipo de usuario, por lo que seria genial que alguien le diera un buen estilo a la advertencia(la clase ya esta creada pero no se como hacerle :V) -->
                <label>Contraseña: </label>
                <input type="password" name="contraseña" placeholder="ingrese una nueva contraseña" required></br>
                <label>Confirmar nueva contraseña:</label>
                <input type="password" name="conf_contra" placeholder="confirme la contraseña" required><br>



                <input type="submit" style="align: center;" value="Update" name="btnmodificar" onClick="Javascript: return confirm ('¿Deseas Modificar tu cuenta?');">
                <a href="./inicio.php" style="align: center;" class="vamo">Volver</a>
            </form>
        </div>
    </body>
</html>

<?php 
if(isset($_POST['btnmodificar']))
{

  $contra = $_POST['contraseña'];
  $conf_contra = $_POST['conf_contra'];
  if($conf_contra == $contra){
    $numero0 = $_POST['telefono'];
    $nombreUsuario0 = $_POST['nomUser'];
    $apellidoUsuario0 = $_POST['apelUser'];
    $direccion0 = $_POST['direccionUser'];
    $email0 = $_POST['correoUser'];
    $sexo0 = $_POST['genero'];
    $tipoUser0 = $tipoUsuAct;

    $querymodificar = mysqli_query($conn,"UPDATE usuarios SET numeroTelefono='$numero0',nombreUsuario='$nombreUsuario0',apellidoUsuario='$apellidoUsuario0',direccion='$direccion0',emailUsuario='$email0',idSexoUsuario='$sexo0',idTipoUsuario='$tipoUser0',contraseña='$contra' WHERE emailUsuario='$actual'");

    header('location: ../index.php');
  }
}
?>