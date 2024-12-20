<?php

declare(strict_types=1);

function set_entry(object $pdo, string $title, string $entry, string $user_id) {
    $query = "INSERT INTO entry (title, entry, users_id) VALUES (:title, :entry, :user_id)";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":entry", $entry);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();
}