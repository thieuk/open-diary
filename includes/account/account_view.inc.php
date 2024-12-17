<?php

declare(strict_types=1);

function display_entries() {
    if (isset($_SESSION["past_entries"])) {
        foreach($_SESSION["past_entries"] as $entry) {
            echo "<br>";
            echo "<p>Date" . htmlspecialchars($entry["date_created"]) . "</p>";
            echo "<p>Entry" . htmlspecialchars($entry["entry"]) . "</p>";
        }
    }
    else {
        echo "<br>";
        echo "<p>No Past Entry.</p>";
    }
}