<?php
    /* Your password */
    $password = $tpassword;

    if (empty($_COOKIE['tpassword']) || $_COOKIE['tpassword'] !== $password) {
        // Password not set or incorrect. Send to login.php.
        header('Location: main');
        exit;
    }
?>