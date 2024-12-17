<?php 
    require_once "includes/config_session.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/account.css">
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
            <input type="password" name="pwd_again" placeholder="Enter Password Again">
            <button type="submit">LOG IN</button>
            <hr>
            <div>
                Don't have a password? <a href="signup.php">SIGN UP</a>
            </div>
        </form>
    </div>
</body>
</html>