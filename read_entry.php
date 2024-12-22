<?php
    require_once "includes/config_session.inc.php";

    if (!isset($_SESSION["read_entry_id"])) {
        header("Location: entry.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/read_entry.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="icon" type="image" href="img/auto_stories.png">
    <title>READ ENTRY</title>
    <script>
        function go_back() {
            window.location.href = document.referrer;
        }
    </script>
</head>
<body>

    <?php 
        require_once "nav.php";
    ?>

    <button onclick="go_back()" id="back-bttn">
        <span class="material-icons" title="Go Back">arrow_back</span>
        <span id="back">BACK</span>
    </button>

    <?php
        require_once "includes/read_entry/read_entry.inc.php";
    ?>
</body>
</html>