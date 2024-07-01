<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('/img/wal1.jpeg') no-repeat center center fixed;
            background-size: cover;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif; /* Adding a default font */
        }
        .registration-form {
            background: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 200px auto; /* Adjusted margin to bring form further down */
        }
        .registration-form h2 {
            margin-bottom: 20px;
            font-weight: 500;
            text-align: center; /* Center align heading */
            font-size: 28px; /* Increased font size for heading */
        }
        .registration-form .form-label,
        .registration-form .form-control,
        .registration-form .form-select,
        .registration-form .btn {
            font-size: 18px; /* Increased font size for form elements */
        }
        .registration-form .btn {
            color: white;
            background-color: #007bff; /* Bootstrap primary button color */
            border: none;
        }
        .registration-form .btn:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }
        .already-account {
            text-align: center;
            margin-top: 20px;
        }
        .already-account a {
            color: #007bff; /* Bootstrap primary link color */
            text-decoration: none;
        }
        .already-account a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="registration-form">
        <h2 class="text-center">Register Form</h2>
        <form id="registrationForm" action="/registerAction" method="post">
            @csrf
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="inputAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="Age" name="age" placeholder="Enter your age" required>
            </div>
            <div class="mb-3">
                <label for="inputGender" class="form-label">Gender</label>
                <select id="Gender" name="gender" class="form-select" required>
                    <option selected disabled>Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Username" class="form-label">Username</label>
                <input type="text" class="form-control" id="Username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="mb-3">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="already-account">
            <p>Already have an account? <a href="/login">Login here</a></p>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Add JavaScript to handle form submission and redirect
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent default form submission
        
        // Assuming form validation passes, you can redirect here
        window.location.href = '/home'; // Redirect to home page after successful registration
    });
</script>
</body>
</html>
