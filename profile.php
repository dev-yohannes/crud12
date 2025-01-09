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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm p-4">
            <h1 class="text-center mb-4">User Profile</h1>
            <table class="table table-bordered table-hover text-center">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo $username; ?></td>
                        <td><?php echo $firstname; ?></td>
                        <td><?php echo $lastname; ?></td>
                        <td><?php echo $age; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $password; ?></td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center mt-4">
                <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
                <a href="logout.php" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>
