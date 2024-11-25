<?php
// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Store username in a session variable
    $_SESSION['username'] = $_POST['username'];
    // Redirect to the welcome page
    header("Location: welcome.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f7f7f7;
        }
        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container input {
            margin: 10px 0;
            width: 100%;
            padding: 10px;
        }
        .login-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome!</h2>
        <p>Please enter your username</p>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <button type="submit">Log In</button>
        </form>
    </div>
</body>
</html>