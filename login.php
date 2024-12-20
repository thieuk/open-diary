<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/login/login_view.inc.php";

    if (isset($_SESSION["user_id"])) {
        header("Location: account.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="icon" type="image" href="img/account_circle.png">
    <title>LOG IN</title>
</head>
<body>
    <?php 
        require_once("nav.php"); 
    ?>

    <div class="container">
        <form action="includes/login/login.inc.php" method="POST">
            <h1>LOG IN</h1>
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="pwd" placeholder="Enter Password">
            <button type="submit">LOG IN</button>

            <?php check_login_error(); ?>

            <hr>
            <div>
                Don't have a password? <a href="signup.php">SIGN UP</a>
            </div>
        </form>
    </div>
</body>
</html>