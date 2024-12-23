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
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="icon" type="image" href="img/account_circle.png">
    <title>ACCOUNT</title>
</head>
<body>
    <?php 
        require_once("nav.php"); 
    ?>

    <div id="account-container">
        <form action="includes/log_out.inc.php" method="POST">
            <button type="submit" class="account-bttn">LOG OUT</button>
        </form>
        <a href="add_entry.php" class="account-bttn">ADD ENTRY</a>
    </div>

    <?php 
        require_once "includes/account/account.inc.php";
    ?>
</body>
</html>