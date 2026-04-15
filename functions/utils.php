<?php
function miFunction(int $num1, int $num2): int
{
    echo $num1 + $num2;
    return 1;
}

function colocarSimbolo(int $precio): String
{
    return "$$precio";
}

function html(): String
{
    return "<h1>html</h1>";
}

function init()
{
    if( session_status() != PHP_SESSION_ACTIVE ){
        session_start();
    }
    $productos = [
        [
            "nombre" => "Toyota Corolla",
            "precio" => 1,
            "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHYsap5NWQHMJTn057TCIr683nGMPTIP5AVw&s",
            "disponible" => true
        ],
        [
            "nombre" => "Toyota Hilux",
            "precio" => 2,
            "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFYrkRRs4WxqsV_g-W3UzbX0drwBUXBFQBkQ&s",
            "disponible" => true
        ],
        [
            "nombre" => "Toyota Etios",
            "precio" => 3,
            "imagen" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxAbnv43ddAN3um0kr4LwbB-hiSxdbV1zb0Q&s",
            "disponible" => false
        ]
    ];
    if( !isset($_SESSION["productos"]) ){
        $_SESSION["productos"] = $productos;
        header("Location: ./index.php?page=home");
    }
}
