<?php 

declare(strict_types=1);

function get_entry(object $pdo, int $entry_id): array|bool {
    $query = "SELECT *, DATE_FORMAT(date_created, '%m/%d/%Y') AS entry_date FROM entry WHERE id=:entry_id;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":entry_id", $entry_id, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    return $result;
}