<?php

declare(strict_types=1);

function set_entry(object $pdo, string $entry, string $user_id) {
    $query = "INSERT INTO entry (entry, users_id) VALUES (:entry, :user_id)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":entry", $entry);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}