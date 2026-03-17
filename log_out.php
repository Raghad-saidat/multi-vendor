<?php
// Start session and clear data
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logging Out | Nova Pixel</title>
    <link rel="stylesheet" href="dashboard.css">
    <meta http-equiv="refresh" content="2;url=index.php">
    <style>
        .logout-wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #0a0a0a; /* Matches your dashboard theme */
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .loader {
            border: 4px solid rgba(255, 255, 255, 0.1);
            border-left-color: #ff4d4d; /* Your red accent color */
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
            margin-bottom: 20px;
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="logout-wrapper">
        <div class="loader"></div>
        <h2>Logging you out...</h2>
        <p>See you soon at Nova Pixel!</p>
        <link href="index.php">
    </div>
</body>
</html>