<?php

try {
    require_once(__DIR__ . "/../config_session.inc.php");
    require_once(__DIR__ . "/../dbh.inc.php");
    require_once("get_entry_model.inc.php");
    require_once("get_entry_view.inc.php");
    require_once("get_entry_contr.inc.php");

    $_SESSION["entries"] = get_past_entries($pdo, $_SESSION["load_entry"]);

    display_entries($_SESSION["entries"]);
}
catch (PDOException $e) {
    header("Location: ../../index.php");
    die("Query Failed: " . $e->getMessage());
}