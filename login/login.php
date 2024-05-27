<?php
session_start();
include("../config/config.php");

$alertMsg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["login"])) {
        $email_address = trim(htmlspecialchars($_POST["EmailAddress"]));
        $password =  trim(htmlspecialchars($_POST["password"]));
        $firstQuery = "SELECT * FROM users WHERE email_address = :email_address LIMIT 1";
        $stmt = $serverConnection->prepare($firstQuery);
        $stmt->bindParam(":email_address", $email_address, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row["user_password"];
            $_SESSION["User-Name"] = $row["full_name"];
            if (password_verify($password, $hashed_password)) {
                $_SESSION["loggedin"] = true;
                header("Location: ../editor/editor.php");
                exit();
            } else {
                $alertMsg = "Invalid password";
            }
        } else {
            $alertMsg = "Invalid email";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login - errehub</title>
    <link rel="stylesheet" href="../assests/styles/register.css">
    <link rel="shortcut icon" href="../assests/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>
<body>
    <main class="main">
        <div class="left">
            <div class="logo">
                <a href="../index.html">
                    <img src="../assests/image/errehub-dark-font.webp" alt="errehub website logo">
                </a>
            </div>
            <div class="head">
                <h1>Welcome Home! Where Your Journey Begins with Every Login.</h1>
            </div>
        </div>
        <div class="right">
            <div class="form loginForm">
                <div class="greetings">
                    <h2>Log In</h2>
                    <p>Welcome back!</p>
                </div>
                <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" name="form" class="submitForm">
                    <div class="second sectionYU">
                        <input type="email" name="EmailAddress" spellcheck="false" id="EmailAddress" autocomplete="true" placeholder="Email Address">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>
                    <div class="third sectionYU">
                        <input type="password" name="password" id="Password1" spellcheck="false" class="inputField" autocomplete="true" placeholder="Password">
                        <img src="../assests/image/show.svg" alt="show-password" class="password" id="passIcon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <input type="submit" id="submit" name="login" value="log in">
                    <p class="havAccc">Don't have an account? <a href="../signup/sign-up.php">Sign up</a></p>
                </form>
                <div class="socialMedia">
                    <ul>
                        <a target="_blank" href="https://github.com/youssef-erremili"><ion-icon name="logo-github"></ion-icon></a>
                        <a target="_blank" href="https://www.linkedin.com/in/youssef-erremili-100070296/"><ion-icon name="logo-linkedin"></ion-icon></a>
                        <a target="_blank" href="https://www.instagram.com/youssef.erremili.990/"><ion-icon name="logo-instagram"></ion-icon></a>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            let alertMsg = "<?php echo $alertMsg; ?>";
            const notyf = new Notyf();
            if (alertMsg == "Invalid password") {
                notyf.error({
                    message: 'Password is incorrect',
                    duration: 6000,
                });
            } else if (alertMsg == "Invalid email") {
                notyf.error({
                    message: 'Email Address is incorrect',
                    duration: 6000,
                });
            }
        });
    </script>
    <script src="../assests/js/login.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
</body>

</html>