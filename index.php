<?php
require_once "./functions/utils.php";
session_start();
init();
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
require_once "./functions/utils.php";
// setcookie("nombre", "Bart Simpson", time() + 3600);
// echo $_COOKIE["nombre"];

// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

$page = isset($_GET["page"]) ? $_GET["page"] : "home";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <?php require "nav.php" ?>
    <div class="container" >
        <?php
        if (file_exists("views/$page.php")) {
            require "views/$page.php";
        } else {
            require "views/404.php";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>