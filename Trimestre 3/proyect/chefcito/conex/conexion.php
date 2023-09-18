<?php
    $conn = new mysqli("localhost","root","","chefcito");
    date_default_timezone_set('America/Bogota');
    if($conn->connect_errno) 
    {
        echo "No hay conexion:(".$conn->connect_errno.")".$conn->connect_error;
    } 
?>
    