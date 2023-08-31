<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>

  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <div class="fondotresrecuadros">
      

      <form class="form" action="vistas/index/inicioSesion/inicioSesion.php" method="post" ><!--redirige la info al php, donde se verificara que el usuario se encuentre en la bd-->
          <center>
            <label><h1 class="display-4">Login</h1></label>
          </center>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-mail: </label>
            <input type="email" class="form-control" name="emailUsuario" id="exampleInputEmail1"  placeholder="chefcito@chefcito.com"  required >
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password: </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="chefcitogod" required>
          </div>
          <center>
            <button type="submit" class="btn btn-outline-success" style="margin-top:40px;" name="btnLogin">Login</button><p></p>
            <label class="label1">si no tienes cuenta registrate <a href="/registro.php">aqui </a>:D </label>
          </center>
      </form>
    </div>
  </body>
</html>