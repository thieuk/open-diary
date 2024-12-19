<?php 

declare(strict_types=1);

function get_entry(object $pdo, int $load_entry): array|bool {
    $num_entry = $load_entry * 10;
    $query = "SELECT *, DATE_FORMAT(date_created, '%m/%d/%Y') AS entry_date FROM entry ORDER BY date_created DESC LIMIT :num_entry;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":num_entry", $num_entry, PDO::PARAM_INT);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}