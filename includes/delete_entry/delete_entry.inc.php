<?php

try {
    require_once(__DIR__ . "/../dbh.inc.php");
    require_once("delete_entry_model.inc.php");
    require_once("delete_entry_contr.inc.php");

    $entry_id = $_POST["entry_id"];
    remove_user_entry($pdo, $entry_id);

    header("Location: ../../account.php");

    $pdo = null;
    $stmt = null;

    die();
}
catch (PDOException $e) {
    header("Location: ../../index.php");
    die("Query Failed: " . $e->getMessage());
}