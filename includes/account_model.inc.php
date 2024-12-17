<?php

declare(strict_types=1);

function get_entries(object $pdo, string $user_id) : array | bool {
    $query = "SELECT * FROM entry WHERE users_id=:user_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":user_id", $user_id);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}