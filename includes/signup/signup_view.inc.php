<?php

declare(strict_types=1);

function check_signup_error() {
    if (isset($_SESSION["signup_error"])) {
        echo '<p class="error-msg">*' . $_SESSION["signup_error"] . '</p>';
        unset($_SESSION["signup_error"]);
    }
    else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<p style="color: green; text-align: center">Account Created.</p>';
    }
}