<?php

// Include database configuration file
require_once '../config/db.php';
$sql = "CREATE DATABASE IF NOT EXISTS library_management_system";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
?>