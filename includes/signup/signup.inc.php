<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwd_again = $_POST["pwd_again"];

    try {
        require_once "../config_session.inc.php";
        require_once "../dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        if (is_input_empty($username, $email, $pwd, $pwd_again)) {
            $error = "Fill in all fields.";
        }
        else if (is_username_taken($pdo, $username)) {
            $error = "User Taken.";
        }
        else if (is_email_invalid($email)) {
            $error = "Invalid Email.";
        }
        else if (is_email_registered($pdo, $email)) {
            $error = "Email already exist.";
        }
        else if (!do_pwd_match($pwd, $pwd_again)) {
            $error = "Passwords do not match.";
        }
        else if (!is_pwd_long_enough($pwd)) {
            $error = "Password must be 8+ characters.";
        }

        if (isset($error)) {
            $_SESSION["signup_error"] = $error;
            header("Location: ../../signup.php");
            die("Query Failed: " . $e->getMessage());
        }

        create_user($pdo, $username, $email, $pwd);

        header("Location: ../../signup.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $e) {    
        header("Location: ../../signup.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../../signup.php");
    die();
}