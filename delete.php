<?php
  session_start();

  if (isset($_SESSION['sess_id'])) {
    $id = $_SESSION['sess_id'];
    $username = $_SESSION['sess_username'];
    $firstname = $_SESSION['sess_firstname'];
    $lastname = $_SESSION['sess_lastname'];
    $age = $_SESSION['sess_age'];
    $email = $_SESSION['sess_email'];
    $password = $_SESSION['sess_password'];

    $delete = "DELETE FROM users WHERE id = '$id'";
    header("Location: index.php");
  }
?>