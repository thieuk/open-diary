<?php

declare(strict_types=1);

function get_past_entries(object $pdo, string $user_id) {
    $entries = get_entries($pdo, $user_id);

    return $entries;
}