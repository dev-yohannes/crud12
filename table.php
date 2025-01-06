<?php

include "conn.php";
$conn->select_db("crud12");

$createTable = "CREATE TABLE IF NOT EXISTS users (
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(100) NOT NULL,
    First_Name VARCHAR(100) NOT NULL,
    Last_Name VARCHAR(100) NOT NULL,
    Age INT NOT NULL,
    Email VARCHAR(100) NOT NULL,
    uPassword VARCHAR(100) NOT NULL
)";

if ($conn->query($createTable) === TRUE) {
    echo "Table Created Successfully";
} else {
    echo "Error When Creating Table: " . $conn->error;
}