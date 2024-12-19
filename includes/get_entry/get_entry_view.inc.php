<?php 

declare(strict_types=1);

function display_entries(array|bool $entries) {
    if ($entries) {
        foreach($entries as $entry) {
            echo "<br>";
            echo "<p>Date: " . htmlspecialchars($entry["entry_date"]) . "</p>";
            echo "<p>Entry: " . htmlspecialchars($entry["entry"]) . "</p>";
        }
    }
    else {
        echo "<br>";
        echo "<p>No Past Entry.</p>";
    }
}