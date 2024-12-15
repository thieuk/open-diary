<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "config_session.inc.php";
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        $errors = [];
        if (is_input_empty($username, $email, $pwd)) {
            $errors[] = "Fill in all fields.";
        }
        else {
            if (is_email_invalid($email)) {
                $errors[] = "Invalid Email.";
            }
            if (is_username_taken($pdo, $username)) {
                $errors[] = "User Taken.";
            }
            if (is_email_registered($pdo, $email)) {
                $errors[] = "Email already exist.";
            }
        }

        if ($errors) {
            $_SESSION["signup_errors"] = $errors;
            header("Location: ../signup.php");
            die("Query Failed: " . $e->getMessage());
        }

        create_user($pdo, $username, $email, $pwd);

        header("Location: ../signup.php?signup=success");
        
        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $e) {    
        header("Location: ../signup.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../signup.php");
    die();
}