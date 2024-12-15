<?php 
    require_once "includes/config_session.inc.php";

    if (!isset($_SESSION["login_status"])) {
        header("Location: ../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
</head>
<body>
    <p>LOGGED IN SUCESSFULLY</p>
</body>
</html>