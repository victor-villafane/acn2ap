<?php 
// Cuenta el número de elementos en un array.
// echo count([1, 2, 3]);
$personajes = ["homero"];
// Agrega uno o más elementos al final de un array
array_push($personajes, "marge");
$personajes []= "Bart";
// Elimina y devuelve el último elemento de un array.
// array_pop($personajes);
print_r($personajes);
$posicion = array_search("marge", $personajes);
unset($personajes[$posicion]);
$personajes = array_values($personajes);
print_r($personajes);
