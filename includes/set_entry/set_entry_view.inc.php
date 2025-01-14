<?php

declare(strict_types=1);

function check_add_entry_error() {
    if (isset($_SESSION["add_entry_errors"])) {
        echo '<p class="error-msg">*' . $_SESSION["add_entry_errors"] . '</p>';
        unset($_SESSION["add_entry_errors"]);
    }
}