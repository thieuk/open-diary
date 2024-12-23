<?php

try {
    require_once(__DIR__ . "/../dbh.inc.php");
    require_once("account_model.inc.php");
    require_once("account_view.inc.php");
    require_once("account_contr.inc.php");

    $past_entries = get_past_entries($pdo, $_SESSION["user_id"]);
    display_entries($past_entries);

    $pdo = null;
    $stmt = null;

    die();
}
catch (PDOException $e) {
    header("Location: ../../index.php");
    die("Query Failed: " . $e->getMessage());
}