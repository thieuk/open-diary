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
    <link rel="icon" type="image" href="img/account_circle.png">
    <title>ACCOUNT</title>
</head>
<body>
    <form action="includes/log_out.inc.php" method="POST">
        <button type="submit">LOG OUT</button>
    </form>

    <form action="includes/set_entry/set_entry.inc.php" method="POST">
        <textarea id="title" name="title" placeholder="Enter a title (5-100 characters)..."></textarea>
        <textarea id="entry" name="entry" placeholder="Enter your diary entry..."></textarea>
        <button type="submit">POST ENTRY</button>
    </form>

    <?php 
        require_once("includes/account/account.inc.php");
    ?>
</body>
</html>