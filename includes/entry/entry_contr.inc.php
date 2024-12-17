<?php

declare(strict_types=1);

function is_input_empty(string $entry) : bool {
    if (empty($entry)) {
        return true;
    }

    return false;
}

function is_input_long_enough(string $entry) : bool {
    if (strlen(str_replace(" ", "", $entry)) < 15) {
        return true;
    }

    return false;
}