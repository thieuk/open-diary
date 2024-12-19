<?php 
    require_once "includes/config_session.inc.php";
    require_once "includes/signup/signup_view.inc.php";

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
    <title>SIGN UP</title>
</head>
<body>
    <?php 
        require_once("nav.php"); 
    ?>
    
    <div class="container">
        <form action="includes/signup/signup.inc.php" method="POST">
            <h1>SIGN UP</h1>
            <input type="text" name="username" placeholder="Enter Username">
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="pwd" placeholder="Enter Password">
            <input type="password" name="pwd_again" placeholder="Enter Password Again">
            <button type="submit">SIGN UP</button>

            <?php check_signup_error(); ?>
            
            <hr>
            <div>
                Already have an account? <a href="login.php">LOG IN</a>
            </div>
        </form>
    <div>
</body>
</html>