<?php 

declare(strict_types=1);

function delete_entry(object $pdo, int $entry_id): void {
    $query = "DELETE FROM entry WHERE id=:entry_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":entry_id", $entry_id);
    $stmt->execute();
}