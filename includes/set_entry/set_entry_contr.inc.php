<?php

declare(strict_types=1);

function is_input_empty(string $title, string $entry): bool {
    if (empty($title) || empty($entry)) {
        return true;
    }

    return false;
}

function is_title_length_valid(string $title): bool {
    $no_space_title = strlen(str_replace(" ", "", $title));

    if ($no_space_title >= 5 && $no_space_title <= 100) {
        return true;
    }

    return false;
}

function is_input_long_enough(string $entry): bool {
    if (strlen(str_replace(" ", "", $entry)) >= 15) {
        return true;
    }

    return false;
}