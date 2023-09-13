<?php 
    include_once("../../conex/conexion.php");

    $telefono=$_POST['phone'];
    $nombre=$_POST['name'];
    $apellido=$_POST['lstname'];
    $genero=$_POST['genero'];
    $tipouser=$_POST['usuario'];
    $direccion=$_POST['address'];
    $correo=$_POST['email'];
    $contra=$_POST['password'];
    $conf_contra=$_POST['confpass'];

    if($contra == $conf_contra)
    {
        mysqli_query($conn, "INSERT INTO usuarios(numeroTelefono,nombreUsuario,apellidoUsuario,direccion,emailUsuario,idSexoUsuario,idTipoUsuario,contraseña) VALUES ('$telefono','$nombre','$apellido','$direccion','$correo','$genero','$tipouser','$contra')");

        header('location: ../../index.php');
    }
    else{
        header('location: vistas/error.php');
    }

?>
