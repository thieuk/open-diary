<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "config_session.inc.php";

    session_unset();
    session_destroy();

    header("Location: ../login.php");
    die();
}
else {
    header("Location: ../index.php");
    die();
}