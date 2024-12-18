<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_unset();
    session_destroy();

    header("Location: ../login.php");
    die();
}
else {
    header("Location: ../index.php");
    die();
}