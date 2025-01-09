<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .glassmorphism {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .bg-custom {
            background-color: #f5f9ff;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body class="bg-custom">
    <div class="container mt-5">
        <div class="glassmorphism form-container">
            <h1 class="text-center mb-4">Login</h1>
            <form method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="u_username" class="form-label">Username:</label>
                    <input type="text" name="u_username" id="u_username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_password" class="form-label">Password:</label>
                    <input type="password" name="u_password" id="u_password" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                <div class="text-center mt-3">
                    <h5 class="text-muted">
                        Don't have an account? <a href="reg.php" class="text-primary fw-bold">Register here</a>
                    </h5>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php
session_start();

include "conn.php";
$conn->select_db("crud12");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u_username = $_POST['u_username'];
    $u_password = $_POST['u_password'];

    $select = "SELECT * FROM users WHERE Username = '$u_username'";
    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($u_password === $row['uPassword']) {
            $_SESSION['sess_id'] = $row['ID'];
            $_SESSION['sess_username'] = $row['Username'];
            $_SESSION['sess_firstname'] = $row['First_Name'];
            $_SESSION['sess_lastname'] = $row['Last_Name'];
            $_SESSION['sess_age'] = $row['Age'];
            $_SESSION['sess_email'] = $row['Email'];
            $_SESSION['sess_password'] = $row['uPassword'];

            header("Location: 6/index.php");
        } else {
            echo "Password Doesn't Match. Try Again!";
        }
    } else {
        echo "User Not Found";
    }
}