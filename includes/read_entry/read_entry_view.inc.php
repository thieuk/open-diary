<?php 

declare(strict_types=1);

function display_entry(array|bool $entry) {
    $title = htmlspecialchars($entry["title"]);
    $date = htmlspecialchars($entry["entry_date"]);
    $full_entry = htmlspecialchars($entry["entry"]);

    echo <<<HTML
        <div id="entry-container">
            <p id="title">Title: $title</p>
            <p id="date">Date: $date</p>
            <p id="entry">$full_entry</p>
        </div>
    HTML;
}