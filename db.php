<?php

include "conn.php";

$createDB = "CREATE DATABASE IF NOT EXISTS users";

if ($conn->query($createDB) === TRUE) {
    echo "Database Created Successfully";
} else {
    echo "Error When Creating Database: ". $conn->error;
}