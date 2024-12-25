<?php 

declare(strict_types=1);

function remove_user_entry(object $pdo, int $entry_id): void {
    delete_entry($pdo, $entry_id);
}