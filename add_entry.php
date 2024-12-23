<?php 
    require_once "includes/config_session.inc.php";

    if (!isset($_SESSION["user_id"])) {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/add_entry.css">
    <link rel="icon" type="image" href="img/account_circle.png">
    <title>ACCOUNT</title>
    <script>
        function go_back() {
            window.location.href = document.referrer;
        }
    </script>
</head>
<body>
    <?php 
        require_once("nav.php"); 
    ?>

    <button onclick="go_back()" id="back-bttn">
        <span class="material-icons" title="Go Back">arrow_back</span>
        <span id="back">BACK</span>
    </button>

    <form action="includes/set_entry/set_entry.inc.php" method="POST" id="add-entry-container">
        <input id="title" name="title" placeholder="Enter a title (5-100 characters)...">
        <textarea id="entry" name="entry" placeholder="Enter your diary entry..."></textarea>
        <button type="submit">POST ENTRY</button>
    </form>
</body>
</html>