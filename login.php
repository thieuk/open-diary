<?php 
    require_once "includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/account.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>OPEN DIARY</title>
    <title>LOG IN</title>
</head>
<body>
    <nav>
        <h1>OPEN DIARY</h1>
        <span class="material-icons">search</span>
        <span class="material-icons">
            <a href="account.php">account_circle</a>
        </span>
    </nav>
    <form action="includes/login.inc.php" method="POST">
        <h1>LOG IN</h1>
        <input type="email" name="email" placeholder="Enter Email">
        <input type="password" name="pwd" placeholder="Enter Password">
        <button type="submit">LOG IN</button>
        <span>
            Don't have a password? <a href="signup.php">SIGN UP</a>
        </span>
    </form>
</body>
</html>