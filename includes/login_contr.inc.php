<?php

declare(strict_types=1);

function is_input_empty(string $email, string $pwd) : bool {
    if (empty($email) || empty($pwd)) {
        return true;
    }

    return false;
}

function does_email_exit(object $pdo, string $email) : bool {
    if (get_user($pdo, $email)) {
        return true;
    }

    return false;
}

function is_password_invalid(object $pdo, string $email, string $pwd) : bool {
    $user = get_user($pdo, $email);
    if (!$user) {
        return true;
    }
    
    if (!password_verify($pwd, $user["pwd"])) {
        return true;
    }

    return false;
}