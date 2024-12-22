<?php 

declare(strict_types=1);

function return_entry(object $pdo, int $entry_id): array|bool {
    $entry = get_entry($pdo, $entry_id);

    return $entry;
}