<?php

    function addUser($fname, $lname, $pnumber, $username, $hashedPassword) {
        include "dbHandler.php";

        if($dbHandler) {
            try {
                $stmt = $dbHandler->prepare("INSERT INTO `employee` (`firstName`, `lastName`, `phoneNumber`, `username`, `passwordHash`) 
                                            VALUES (:fname, :lname, :pnumber, :username, :hashedPassword);");
                $stmt->bindParam("fname", $fname, PDO::PARAM_STR);
                $stmt->bindParam("lname", $lname, PDO::PARAM_STR);
                $stmt->bindParam("pnumber", $pnumber, PDO::PARAM_STR);
                $stmt->bindParam("username", $username, PDO::PARAM_STR);
                $stmt->bindParam("hashedPassword", $hashedPassword, PDO::PARAM_STR);
                $stmt->execute();
                echo "<p class='success'>Account Created Successfully.</p>";
                echo "<a class='register-success' href='login.php'>Log in</a>";
                $stmt->closeCursor();
            } catch(Exception $ex) {
                echo $ex;
            }
        }
    }

    function checkUsernameExistance($username) {
        include "dbHandler.php";

        if($dbHandler) {
            try {
                $stmt = $dbHandler->prepare("SELECT * FROM `employee` WHERE `username` = :username;");
                $stmt->bindParam("username", $username, PDO::PARAM_STR);
                $stmt->execute();

                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if($result == true) {
                    echo "<p class='error'>Username already taken.</p>";
                    return $result;
                } else {
                    return $result;
                }

                $stmt->closeCursor();
            } catch(Exception $ex) {
                echo $ex;
            }
        }
    }

    function validateInput() {
        $fname = filter_input(INPUT_POST, "fname", FILTER_DEFAULT, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $lname = filter_input(INPUT_POST, "lname", FILTER_DEFAULT, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $pnumber = filter_input(INPUT_POST, "pnumber", FILTER_DEFAULT, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $username = filter_input(INPUT_POST, "username", FILTER_DEFAULT, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $password = $_POST["password"];
        $password2 = $_POST["password2"];

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if(empty($username) || empty($password) || empty($fname) || empty($lname) || empty($pnumber)) {
            echo "<p class='error'>Please fill up all the inputs.</p>";
        } elseif($password != $password2) {
            echo "<p class='error'>Given passwords must match.</p>";
        } else {
            if(checkUsernameExistance($username) == false) {
                addUser($fname, $lname, $pnumber, $username, $hashedPassword);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gemorskos &vert; Register</title>
    <link rel="icon" href="images/websiteIcon.png">
    <link rel="stylesheet" href="styles/styleLogin.css">
</head>
<body>
    <div class="pageWrapper">
        <header>
            <div id="headerContent">
                <img id="logo" src="images/loginPageImg/logo-no-text.png" alt="Logo">
                <p id="headerText">REGISTER</p>
                <div class="buttonWrapper">
                    <a href="index.php" class="loginButton headerButton">BACK</a>
                </div>
            </div>
        </header>
        <main class="mainFlex">
            <div id="mainContent">
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
                    <div class="formCategory">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="formCategory">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                    <div class="formCategory">
                        <label for="pnumber">Phone Number</label>
                        <label class="number-pattern" for="pnumber">Pattern: 123-456-7890</label>
                        <input type="tel" name="pnumber" id="pnumber" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </div>
                    <div class="formCategory">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="formCategory">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="formCategory">
                        <label for="password2">Confirm Password</label>
                        <input type="password" name="password2" id="password2" required>
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