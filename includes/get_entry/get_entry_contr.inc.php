<?php 

declare(strict_types=1);

function get_past_entries(object $pdo, int $load_entry, ?string $search_query): array|bool {
    $entries = get_entry($pdo, $load_entry, $search_query);

    return $entries;
}