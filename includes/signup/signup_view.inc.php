<?php

declare(strict_types=1);

function check_signup_errors() {
    if (isset($_SESSION["signup_errors"])) {
        foreach ($_SESSION["signup_errors"] as $error) {
            echo '<p class="error-msg">' . $error . '</p>';
        }

        unset($_SESSION["signup_errors"]);
    }
    else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<p style="color: green; text-align: center">Account Created.</p>';
    }
}