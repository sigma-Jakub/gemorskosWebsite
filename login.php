<?php
    session_start();

    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        include "dbHandler.php";

        $username = filter_input(INPUT_POST, "username", FILTER_DEFAULT, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = $_POST["password"];
  
        if(empty($username) || empty($password)) {
            $error = "<p class='error'>Please fill up all the inputs.</p>";
        } else {
            if($dbHandler) {
                try {
                    $stmt = $dbHandler->prepare("SELECT * FROM `employee` WHERE `username` = :username");
                    $stmt->bindParam("username", $username, PDO::PARAM_STR);
                    $stmt->execute();
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);

                    if($result && password_verify($password, $result["passwordHash"])) {
                        $_SESSION["access"] = $username;
                        header("Location: welcome.php");
                        exit();
                    } else {
                        $error = "<p class='error'>Combination of username and password was not found.</p>";
                    }
                    $stmt->closeCursor();
                } catch(Exception $ex) {
                    $error = $ex;
                }
            }
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemorskos | Log In</title>
    <link rel="icon" href="images/websiteIcon.png">
    <link rel="stylesheet" href="styles/styleLogin.css">
</head>
<body>
    <div class="pageWrapper">
        <header>
            <div id="headerContent">
                <img id="logo" src="images/loginPageImg/logo-no-text.png" alt="Logo">
                <p id="headerText">LOG IN</p>
                <div class="buttonWrapper">
                    <a href="index.php" class="loginButton headerButton">BACK</a>
                </div>
            </div>
        </header>
        <main class="mainFlex">
            <div id="mainContent">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <div class="formCategory">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="formCategory">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div id="buttonContainer">
                        <button type="submit" class="loginButton">Submit</button>
                        <button type="reset" class="loginButton">Reset</button>
                    </div>
                </form>
                <div class="errorsContainer">
                    <?php
                        if(!empty($error)) {
                            echo $error;
                        }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>