<?php

try {
    require_once(__DIR__ . "/../config_session.inc.php");
    require_once(__DIR__ . "/../dbh.inc.php");
    require_once("get_entry_model.inc.php");
    require_once("get_entry_view.inc.php");
    require_once("get_entry_contr.inc.php");
    
    $search_query = $_SESSION["search_query"] ?? null;
    $_SESSION["entries"] = get_past_entries($pdo, $_SESSION["load_entry"], $search_query);
    display_entries($_SESSION["entries"]);

    $pdo = null;
    $stmt = null;
}
catch (PDOException $e) {
    header("Location: ../../index.php");
    die("Query Failed: " . $e->getMessage());
}