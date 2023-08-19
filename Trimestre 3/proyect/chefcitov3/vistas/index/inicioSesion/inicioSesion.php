<?php 

        require_once('../../../conex/conexion.php');

        $usuario= $_POST['telefonoUsur'];
        $contraseña= $_POST['password'];
                
        $queryinicioSesion = mysqli_query($conn, "SELECT * from usuarios where numeroTelefono='$usuario' and contraseña='$contraseña'");
        $fila = mysqli_fetch_array($queryinicioSesion);

        $cantidadFilas = mysqli_num_rows($queryinicioSesion);

        if($cantidadFilas > 0){
            #aqui va la condicion en caso de que el usuario sea de tipo admin o cliente :v por el momento llevara a admin
            if($fila['idTipoUsuario']== 2 ){ #En caso  de que sea admin :v
            header('location:../../admin.php');}
            else{ #En caso de que sea cliente :v
                header('location:../../inicio.php');
            }
        }else{       
            #aqui va en caso de que no se haya encontrado al usuario, osea que inserto o la contraseña o el usuario incorrecto
            header('location:../error.php');
        }
?>