<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemorskos &vert; Welcome</title>
    <link rel="icon" href="images/websiteIcon.png">
    <link rel="stylesheet" href="styles/styleWelcome.css">
</head>
<body>
    <?php
        if(isset($_SESSION["access"])) {
            echo '
                <div class="main-container">
                    <p class="title">Welcome to Gemorskos!</p>
                    <div class="buttons">
                        <a class="redirect-button" href="http://localhost:8080" target="_blank">Database Access</a>
                        <a class="redirect-button" href="index.php">Back To Home</a>
                    </div>
                </div>      
            ';
        } else {
            echo '
                <div class="main-container">
                    <p class="title">Access Denied</p>
                    <p class="subtitle">Please log in first to get access.</p>
                    <div class="buttons">
                        <a class="redirect-button" href="login.php">Log in</a>
                        <a class="redirect-button" href="index.php">Back To Home</a>
                    </div>
                </div>
            ';
        }
    ?>
</body>
</html>