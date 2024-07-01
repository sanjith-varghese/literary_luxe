<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/img/wal1.jpeg') no-repeat center center fixed;
            background-size: cover;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .login-form {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 200px auto; /* Adjusted margin for centering */
        }
        .login-form h2 {
            margin-bottom: 20px;
            font-weight: 500;
            text-align: center;
            font-size: 28px;
        }
        .login-form .form-label,
        .login-form .form-control,
        .login-form .form-select,
        .login-form .btn {
            font-size: 18px;
        }
        .create-account-link,
        .forgot-password-link {
            text-align: center;
            margin-top: 20px;
        }
        .create-account-link a,
        .forgot-password-link a {
            color: #007BFF;
            text-decoration: none;
            font-weight: bold;
        }
        .create-account-link a:hover,
        .forgot-password-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="login-form">
        <h2>Login Form</h2>
        <form action="/loginAction" method="post">
            @csrf
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username"  name="username" placeholder="Enter your username">
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your password">
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
        <div class="create-account-link">
            <p>Don't have an account? <a href="/register">Create New Account</a></p>
        </div>
        <div class="forgot-password-link">
            <p><a href="/forgot-password">Forgot Password?</a></p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
