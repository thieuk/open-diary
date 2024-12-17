<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $entry = $_POST["entry"];

    try {
        require_once("../config_session.inc.php");
        require_once("../dbh.inc.php");
        require_once("entry_model.inc.php");
        require_once("entry_contr.inc.php");

        if (is_input_empty($entry)) {
            $error = "Fill in all fields.";
        }
        else if (is_input_long_enough($entry)) {
            $error = "Entry must contains at least 15 characters.";
        }

        if (isset($error)) {
            $_SESSION["entry_errors"] = $error;
            header("Location: ../../account.php");
            die("Query Failed: " . $e->getMessage());
        }

        set_entry($pdo, $entry, $_SESSION["user_id"]);

        $pdo = null;
        $stmt = null;

        header("Location: ../../account.php");
        die();
    }
    catch (PDOException $e) {
        header("Location: ../../index.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../../index.php");
    die();
}