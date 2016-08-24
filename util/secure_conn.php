<?php
    // make sure the page uses a secure connection
    if (!isset($_SERVER['HTTPS'])) {
        $url = 'https://' . $_SERVER['HTTP_HOST'].':440' . $_SERVER['REQUEST_URI'];
        header("Location: " . $url);
        exit();
    }
?>