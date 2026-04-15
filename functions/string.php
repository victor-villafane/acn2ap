<?php
// Recibe una cadena y devuelve un entero con la logitud de string
// strlen("1234");
$cadena = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
// Reemplaza una parte de una cadena por otra.
// echo str_replace("Lorem", "Otra Cosa", $cadena);

//  Extrae una parte de una cadena.
// echo substr($cadena, 5, 30);

// Convierte una cadena a minúsculas
// echo strtolower($cadena);
// Convierte una cadena a mayusculas
// echo strtoupper($cadena);
$arrayCadena = explode(" ", $cadena);
$string = implode("-", $arrayCadena);
echo $string;