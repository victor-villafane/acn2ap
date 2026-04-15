<?php 
session_start();
$auto = [
    "nombre" => htmlspecialchars($_POST["nombre"]),
    "imagen" => htmlspecialchars($_POST["imagen"]),
    "precio" => htmlspecialchars($_POST["precio"]),
    "disponible" => true
];

$_SESSION["productos"] []= $auto;

header("Location: ../index.php?page=home");