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
        .bg-darker {
            background-color: #e0e0e0;
        }
        .form-container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body class="bg-darker">
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
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>