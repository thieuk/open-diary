<?php 

declare(strict_types=1);

function get_entry(object $pdo, int $load_entry, ?string $search_query): array|bool {
    $num_entry = $load_entry * 7;

    if ($search_query !== null) {
        $query = "SELECT *, DATE_FORMAT(date_created, '%m/%d/%Y') AS entry_date 
                FROM entry 
                WHERE title LIKE :search_query OR entry LIKE :search_query
                ORDER BY date_created 
                DESC LIMIT $num_entry;";
    }
    else {
        $query = "SELECT *, DATE_FORMAT(date_created, '%m/%d/%Y') AS entry_date FROM entry ORDER BY date_created DESC LIMIT $num_entry;";
    }

    $stmt = $pdo->prepare($query);

    if ($search_query !== null) {
        $search_query = "%$search_query%";
        $stmt->bindParam(":search_query", $search_query);
    }

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}