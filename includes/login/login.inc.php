<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "../config_session.inc.php";
        require_once "../dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        if (is_input_empty($email, $pwd)) {
            $error = "Fill in all fields.";
        }
        else if (!does_email_exit($pdo, $email) || is_password_invalid($pdo, $email, $pwd)) {
            $error = "Incorrect email or password.";
        }

        if (isset($error)) {
            $_SESSION["login_error"] = $error;
            header("Location: ../../login.php");
            die("Query Failed: " . $e->getMessage());
        }

        regenerate_session_id();

        $user_info = get_user($pdo, $email);
        $_SESSION["user_id"] = $user_info["id"];
        $_SESSION["username"] = $user_info["username"];

        header("Location: ../../account.php");
        
        $pdo = null;
        $stmt = null;

        die();
    }
    catch (PDOException $e) {    
        header("Location: ../../login.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../../login.php");
    die();
}