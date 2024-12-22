<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $entry_id = $_POST["entry_id"];

    try {
        require_once __DIR__ . "/config_session.inc.php";

        $_SESSION["read_entry_id"] = (int) $entry_id;
        header("Location: ../read_entry.php");

        die();
    }
    catch (PDOException $e) {    
        header("Location: ../entry.php");
        die("Query Failed: " . $e->getMessage());
    }
}
else {
    header("Location: ../entry.php");
    die();
}