<div >
    <div class="fondotresrecuadros">
      <div style="display: flex;">
        <div class="registro">
        <form action="verificacion.php" method="post">
            <h1>Registro</h1>
            <label >N° de telefono</label>
            <input type="number" name="phone" placeholder="cel"><BR>

            <label >Nombres</label>
            <input type="text" name="name" placeholder="Name">

            <label >Apellido</label>
            <input type="text"name="lstname" placeholder="last name..">
            <label>Tipo de usuario</label><br>
            <input  type="radio" name="usuario" value="1" id="cliente">
            <label  for="cliente">Cliente</label>
            <input  type="radio"  name="usuario" value="2" id="admin">
             <label for="admin">Administrador</label><br>

            <label>Genero</label>
            <select name="genero" id="gene" required>
            <option value="0">No Seleccionado</option>
            <option value="1">Mujer</option>
            <option value="2">Hombre</option>
            </select>
            <label>Dirrecion</label>
            <input type="text" name="address" placeholder="Address" required>
            <label >Correo</label>
            <input type="text" name="email"value="@" required>
            <label >Contraseña</label><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <label >Confirmar contraseña</label><br>
            <input type="password" name="confpass" placeholder="confirm password"required>
            <p>
              <center>
              <input type="submit"  name="btnregistrar" value="registrar" onClick="Javascript: return confirm('¿desea registar a este usuario?');">
            </p>
            <p>
              <lable>si ya tienes cuenta click <a href="index.php">aqui</button> :D</label>
            </p>
            </center>
        </form>
        </div>
            <div class="caffe" >
          <img class="cafe"src="imagenes/cafe.jpeg"alt="" >
          </div> 
      </div>
    </div>
 </div>