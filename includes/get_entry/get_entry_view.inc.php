<?php 

declare(strict_types=1);

function display_entries(array|bool $entries) {
    if ($entries) {
        foreach($entries as $entry) {
            $entry_id = $entry['id'];
            $pad_title = htmlspecialchars(str_pad($entry["title"], 100, "_ _", STR_PAD_RIGHT));
            $entry_date = htmlspecialchars($entry["entry_date"]);

            echo <<<HTML
                <form action="includes/redirect_to_read_entry.inc.php" method="POST" class="entry">
                    <input type="hidden" name="entry_id" value="$entry_id">
                    <button type="submit">
                        <p id="title">Title</p>
                        <p id="entry_title">$pad_title</p>
                        <p id="entry_date">$entry_date</p>
                    </button>
                </form>
            HTML;
        }
    }
    else {
        echo "<br>";
        echo "<p>No Past Entry.</p>";
    }
}