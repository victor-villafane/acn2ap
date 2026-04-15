<?php
session_start();
// session_destroy();
$_SESSION = [];
echo "<pre>";
print_r($_POST);
echo "</pre>";

if ($_POST["email"] == "homero@plantanuclear.com" && $_POST["pass"] == "123456") {
    $_SESSION["usuario"] = [
        "email" => $_POST["email"]
    ];
    header("Location: ../index.php?page=home");
    exit();
}
header("Location: ../index.php?page=login");
exit();
