<?php

try {
    require_once("includes/dbh.inc.php");
    require_once("includes/account_model.inc.php");
    require_once("includes/account_view.inc.php");
    require_once("includes/account_contr.inc.php");

    $past_entries = get_past_entries($pdo, $_SESSION["user_id"]);
    $_SESSION["past_entries"] = $past_entries;
    display_entries();

    $pdo = null;
    $stmt = null;

    die();
}
catch (PDOException $e) {
    header("Location: ../index.php");
    die("Query Failed: " . $e->getMessage());
}