<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/signup/signup_view.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>OPEN DIARY</title>
    <title>SIGN UP</title>
</head>
<body>
    <nav>
        <h1>OPEN DIARY</h1>
        <span class="material-icons">search</span>
        <span class="material-icons">
            <a href="login.php">account_circle</a>
        </span>
    </nav>
    <form action="includes/signup/signup.inc.php" method="POST">
        <h1>SIGN UP</h1>
        <input type="text" name="username" placeholder="Enter Username">
        <input type="email" name="email" placeholder="Enter Email">
        <input type="password" name="pwd" placeholder="Enter Password">
        <button type="submit">SIGN UP</button>
    </form>

    <?php
        check_signup_errors();
    ?>
</body>
</html>