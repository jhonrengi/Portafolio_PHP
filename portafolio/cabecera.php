<?php
session_start();
//print_r($_SESSION);

if( isset($_SESSION['usuario'])!="sebastian"){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Portafolio</title>
</head>
<body>

    <div class="container">
        <a href="index.php">Inicio</a>|
        <a href="portafolio.php">Portafolio</a>|
        <a href="cerrar.php">Cerrar</a>|
        <br>
   
    
    