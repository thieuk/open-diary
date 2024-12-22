<?php
    require_once "includes/config_session.inc.php";
    
    if (!isset($_SESSION["load_entry"])) {
        $_SESSION["load_entry"] = 1;
    } 
    else if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $_SESSION["load_entry"]++;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/entry.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image" href="img/auto_stories.png">
    <title>ENTRIES</title>
</head>
<body>
    <?php 
        require_once("nav.php");
    ?>

    <form action="includes/search.inc.php" method="POST" id="search-container">
        <span class="material-icons">search</span>
        <input type="text" name="search" placeholder="Search...">
    </form>

    <?php 
        require_once "includes/get_entry/get_entry.inc.php"; 
    ?>

    <form method="POST">
        <button type="submit" id="load-bttn">LOAD MORE</button>
    </form>
</body>
</html>