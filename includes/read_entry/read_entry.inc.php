<?php 

declare(strict_types=1);

try {
    require_once(__DIR__ . "/../config_session.inc.php");
    require_once(__DIR__ . "/../dbh.inc.php");
    require_once("read_entry_model.inc.php");
    require_once("read_entry_view.inc.php");
    require_once("read_entry_contr.inc.php");

    $entry = return_entry($pdo, $_SESSION["read_entry_id"]);

    display_entry($entry);

    $pdo = null;
    $stmt = null;

    die();
}
catch (PDOException $e) {
    header("Location: ../../index.php");
    die("Query Failed: " . $e->getMessage());
}