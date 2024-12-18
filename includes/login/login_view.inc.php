<?php

declare(strict_types=1);

function check_login_error() {
    if (isset($_SESSION["login_error"])) {
        echo '<p class="error-msg">*' . $_SESSION["login_error"] . '</p>';
        unset($_SESSION["login_error"]);
    }
}