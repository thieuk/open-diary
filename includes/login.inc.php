<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "config_session.inc.php";
        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        if (is_input_empty($email, $pwd)) {
            $errors = "Fill in all fields.";
        }
        else if (!does_email_exit($pdo, $email) || is_password_invalid($pdo, $email, $pwd)) {
            $errors = "Incorrect email or password.";
        }

        if ($errors) {
            $_SESSION["login_errors"] = $errors;
            header("Location: ../login.php");
            die("Query Failed: " . $e->getMessage());
        }

        regenerate_session_id();

        $user_info = does_email_exit($pdo, $email);
        $_SESSION["login_status"] = 1;
        $_SESSION["user_id"] = $user_info["id"];
        $_SESSION["username"] = $user_info["username"];

        header("Location: ../account.php");
        
        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $e) {    
        header("Location: ../login.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../login.php");
    die();
}