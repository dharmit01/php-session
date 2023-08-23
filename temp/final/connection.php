<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
