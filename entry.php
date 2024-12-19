<?php
    require_once "includes/config_session.inc.php";

    if (!isset($_SESSION["load_entry"])) {
        $_SESSION["load_entry"] = 1;
    } 
    else if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $_SESSION["load_entry"]++;
    }
    else if ($_SERVER["REQUEST_METHOD"] === "GET") {
        $_SESSION["load_entry"] = 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image" href="img/auto_stories.png">
    <title>ENTRIES</title>
</head>
<body>
    <?php 
        require_once("nav.php");
        require_once("includes/get_entry/get_entry.inc.php"); 
    ?>

    <form method="POST">
        <button type="submit">LOAD MORE</button>
    </form>
</body>
</html>