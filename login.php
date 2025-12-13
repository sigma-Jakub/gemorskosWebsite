<?php
    function validateInput()
    {

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        $errors = array();
        $errorFlag = FALSE;

        if(empty(trim($username)) || strlen($username) < 5)
        {
            array_push($errors, "<p class='error'>Please enter a valid username.</p>");
            $errorFlag = TRUE;
        }

        if(empty(trim($password)))
        {
            array_push($errors, "<p class='error'>Please enter a valid password.</p>");
            $errorFlag = TRUE;
        }

        // Add password check.

        if(!empty($errors))
        {
            foreach($errors as $error)
            {
                echo $error;
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
    <link rel="stylesheet" href="styles/styleLogin.css">
</head>
<body>
    <div class="pageWrapper">
        <header>
            <div id="headerContent">
                <img id="logo" src="images/loginPageImg/logo-no-text.png" alt="Logo">
                <p id="headerText">LOG IN</p>
                <div class="buttonWrapper">
                    <a href="main.php" class="loginButton headerButton">BACK</a>
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
                        if($_SERVER["REQUEST_METHOD"] == "POST")
                        {
                            validateInput();
                        }
                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>