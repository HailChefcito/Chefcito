<?php
    $conn = new mysqli("localhost","root","","chefcito");
    
    if($conn->connect_errno) 
    {
        echo "No hay conexion:(".$conn->connect_errno.")".$conn->connect_error;
    } 
?>
    