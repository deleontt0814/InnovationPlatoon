<?php

    $message = '';
    // localhost, username, password, database
    $db = new mysqli('localhost', 'admin', 'admin', 'usernames');

    if ($db->connect_error) {

        $message = $db->connect_error;

    } else {

        echo $message;

    }
?>