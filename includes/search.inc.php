<?php 

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    require_once "config_session.inc.php";

    $search_query = $_POST["search"];

    if (!empty($search_query)) {
        $_SESSION["search_query"] = $search_query;
    }
    else if (isset($_SESSION["search_query"])) {
        unset($_SESSION["search_query"]);
    }

    header("Location: ../entry.php");
    exit();
}
else {
    header("Location: ../entry.php");
    die();
}