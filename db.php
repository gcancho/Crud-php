<?php

//Inicia sesion
session_start();

$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'php-crud'
);

//Si existe el objeto de conexion $conn
// if(isset($conn)){
//     echo 'La bd existe';
// }

?>