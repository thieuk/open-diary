<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/set_entry/set_entry_view.inc.php";

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
</head>
<body>
    <?php 
        require_once("nav.php"); 
    ?>

    <button onclick="window.location.href='account.php'" id="back-bttn">
        <span class="material-icons" title="Go Back">arrow_back</span>
        <span id="back">BACK</span>
    </button>

    <form action="includes/set_entry/set_entry.inc.php" method="POST" id="add-entry-container">
        <?php check_add_entry_error(); ?>
        <input id="title" name="title" placeholder="Enter a title (5-100 characters)...">
        <textarea id="entry" name="entry" placeholder="Enter your diary entry (15+ characters)..."></textarea>
        <button type="submit">POST ENTRY</button>
    </form>
</body>
</html>