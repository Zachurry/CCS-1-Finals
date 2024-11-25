
<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $_SESSION['username'] = $_POST['username'];
    
    header("Location: home.php");
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
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #ADBBDA;
        }
        .login-container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            height: 500px;
            margin: 50px;
            text-align: center;
        }
        .login-container input {
            margin: 10px 0;
            width: 90%;
            padding: 20px;
        }
        .login-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 20px;
            width: 100%;
        }
        .image-container {
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-right: 50px;
        }
        .image-container img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10px;
            transition: opacity 0.5s ease-in-out;
        }
        .login-container p{
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Welcome!</h2>
        <p>Please enter your username</p>
        <form method="POST" action="">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>
    </div>
    <div class="image-container">
        <img id="cycling-image" src="image1.jpg">
    </div>

    <script>
        const images = ["image1.jpg", "image2.jpg", "image3.png"]; 
        let currentIndex = 0;
        const imageElement = document.getElementById("cycling-image");

        function cycleImages() {
            currentIndex = (currentIndex + 1) % images.length; 
            imageElement.style.opacity = 0; 
            setTimeout(() => {
                imageElement.src = images[currentIndex]; 
                imageElement.style.opacity = 1; 
            }, 500); 
        }

        
        setInterval(cycleImages, 3000);
    </script>
</body>
</html>