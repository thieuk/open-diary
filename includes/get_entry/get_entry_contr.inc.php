<?php 

declare(strict_types=1);

function get_past_entries(object $pdo) : array | bool {
    $entries = get_entry($pdo, $_SESSION["load_entry"]);

    return $entries;
}