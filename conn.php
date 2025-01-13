<?php

$conn_hostname = "localhost";
$conn_username = "root";
$conn_password = "";

$conn = new mysqli($conn_hostname, $conn_username, $conn_password);

if ($conn->connect_error) {
    die("Connection Failed");
}