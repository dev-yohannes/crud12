<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
        .login-link {
            margin-top: 20px;
            text-align: center;
        }
        .login-link h5 {
            color: #6c757d;
        }
        .login-link a {
            color: #007bff;
            font-weight: bold;
        }
    </style>
</head>
<body class="bg-custom">
    <div class="container mt-5">
        <div class="glassmorphism form-container">
            <h1 class="text-center mb-4">Registration</h1>
            <form method="post" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="u_username" class="form-label">Username:</label>
                    <input type="text" name="u_username" id="u_username" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_firstname" class="form-label">First Name:</label>
                    <input type="text" name="u_firstname" id="u_firstname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_lastname" class="form-label">Last Name:</label>
                    <input type="text" name="u_lastname" id="u_lastname" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_age" class="form-label">Age:</label>
                    <input type="number" name="u_age" id="u_age" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_email" class="form-label">Email:</label>
                    <input type="email" name="u_email" id="u_email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="u_password" class="form-label">Password:</label>
                    <input type="password" name="u_password" id="u_password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password:</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="login-link">
                    <h5>Already have an account? <a href="login.php">Login here</a></h5>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
