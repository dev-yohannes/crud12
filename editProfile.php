<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        .custom-form-container {
            max-width: 800px;
            margin: auto;
            background-color: #f5f9ff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .bg-custom {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body class="bg-custom">
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
    }
    ?>
    <div class="container mt-5">
        <div class="custom-form-container">
            <h1 class="text-center mb-4">Edit Profile</h1>
            <form method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="n_username" class="form-label">Username:</label>
                    <input type="text" name="n_username" id="n_username" class="form-control" value="<?php echo $username; ?>">
                </div>
                <div class="mb-3">
                    <label for="n_firstname" class="form-label">First Name:</label>
                    <input type="text" name="n_firstname" id="n_firstname" class="form-control" value="<?php echo $firstname; ?>">
                </div>
                <div class="mb-3">
                    <label for="n_lastname" class="form-label">Last Name:</label>
                    <input type="text" name="n_lastname" id="n_lastname" class="form-control" value="<?php echo $lastname; ?>">
                </div>
                <div class="mb-3">
                    <label for="n_age" class="form-label">Age:</label>
                    <input type="number" name="n_age" id="n_age" class="form-control" value="<?php echo $age; ?>">
                </div>
                <div class="mb-3">
                    <label for="n_email" class="form-label">Email:</label>
                    <input type="email" name="n_email" id="n_email" class="form-control" value="<?php echo $email; ?>">
                </div>
                <div class="mb-3">
                    <label for="n_password" class="form-label">Password:</label>
                    <input type="password" name="n_password" id="n_password" class="form-control" value="<?php echo $password; ?>">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<?php

include "conn.php";
$conn->select_db("crud12");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n_username = $_POST['n_username'];
    $n_firstname = $_POST['n_firstname'];
    $n_lastname = $_POST['n_lastname'];
    $n_age = $_POST['n_age'];
    $n_email = $_POST['n_email'];
    $n_password = $_POST['n_password'];

    $updateData = "UPDATE users SET Username = '$n_username', First_Name = '$n_firstname', Last_Name = '$n_lastname', Age = '$n_age', Email = '$n_email', uPassword = '$n_password' WHERE ID = '$id'";

    if ($conn->query($updateData) === TRUE) {
        echo "Data Updated Successfully";

        $_SESSION['sess_username'] = $n_username;
        $_SESSION['sess_firstname'] = $n_firstname;
        $_SESSION['sess_lastname'] = $n_lastname;
        $_SESSION['sess_age'] = $n_age;
        $_SESSION['sess_email'] = $n_email;
        $_SESSION['sess_password'] = $n_password;

        header("Location: profile.php");
    } else {
        echo "Error When Updating Data: " . $conn->error;
    }
}

?>