<?php
include("db.php");

$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];

$consulta = "INSERT INTO tarea(titulo, descripcion) VALUES ('$titulo', '$descripcion')";
$resultado = mysqli_query($conn, $consulta);

if(!$resultado){
    die("Consulta fallida");
}

//Valores que se almacenaran en sesion
$_SESSION["mensaje"] = "Tarea guardada satistactoriamente";
$_SESSION["tipo_mensaje"] = "success";


header("Location: index.php");

?>