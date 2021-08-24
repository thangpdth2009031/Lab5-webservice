<?php
    $username = "root"; // Khai báo username
    $password = "";      // Khai báo password
    $server   = "localhost";   // Khai báo server
    $dbname   = "tintuc";      // Khai báo database

    $conn = new mysqli($server, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed: ". $conn->connect_error);
    }
?>