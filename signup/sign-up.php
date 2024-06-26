<?php
session_start();
include("../config/config.php");
// include($_SERVER["DOCUMENT_ROOT"]."/resume-builder/assets/php/signup.php"); 

$alertMsg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["signup"])) {
        $fullname =   trim(htmlspecialchars($_POST["FullName"]));
        $email_address = trim(htmlspecialchars($_POST["EmailAddress"]));
        $user_password = trim(htmlspecialchars(password_hash($_POST["password"], PASSWORD_DEFAULT)));
        $firstQuery = "SELECT * FROM users WHERE email_address = :email_address";
        $stmt = $serverConnection->prepare($firstQuery);
        $stmt->bindParam(":email_address", $email_address, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $alertMsg = "exist";
        } else {
            $secondQuery = "INSERT INTO users(full_name, email_address, user_password) 
                        VALUES (:full_name, :email_address, :user_password)";
            $stmt = $serverConnection->prepare($secondQuery);
            $stmt->bindParam(":full_name", $fullname);
            $stmt->bindParam(":email_address", $email_address);
            $stmt->bindParam(":user_password", $user_password);
            $aa = $stmt->execute();
            if ($aa) {
                header("location: ../login/login.php");
            } else {
                $alertMsg = "error to sign up";
            }
        }
    }
}


// $serverConnection = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Errehub</title>
    <link rel="stylesheet" href="../assets/styles/register.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</head>

<body>
    <main class="main">
        <div class="left">
            <div class="logo">
                <a href="../index.html">
                    <img src="../assets/image/errehub-dark-font.webp" alt="errehub website logo">
                </a>
            </div>
            <div class="head">
                <h1>You're minutes away from a better resume</h1>
                <p>In a few minutes, your resume is getting a boost. We'll make it better by highlighting your skills
                    and achievements. Get ready for a resume that stands out and opens doors to new opportunities. It's
                    simple and effective. your improved resume is almost ready!</p>
            </div>
        </div>
        <div class="right">
            <div class="form">
                <div class="greetings">
                    <h2>Sign In</h2>
                    <p>Create a free account today</p>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" name="form" class="submitForm">
                    <div class="first sectionYU">
                        <input type="text" name="FullName" id="FullName" spellcheck="false" autocomplete="off" placeholder="Full Name">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="second sectionYU">
                        <input type="email" name="EmailAddress" spellcheck="false" id="EmailAddress" autocomplete="off" placeholder="Email Address">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>
                    <div class="third sectionYU">
                        <input type="password" name="password" id="Password1" spellcheck="false" class="inputField" autocomplete="off" placeholder="Password">
                        <img src="../assets/image/show.svg" alt="show-password" class="password" id="passIcon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="forth sectionYU">
                        <input type="password" name="passWord-confirm" id="Password2" spellcheck="false" class="inputField" autocomplete="off" placeholder="Conform Password">
                        <img src="../assets/image/show.svg" alt="show-password" class="password" id="passIcon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <input type="submit" id="submit" name="signup" value="Sign up">
                    <p class="havAccc">Already, I have an account <a href="../login/login.php">log in</a></p>
                </form>
                <p>By clicking the button, you are agreeing to our <strong><a id="terms" href="">Terms & conditions</a></strong></p>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var alertMsg = "<?php echo $alertMsg; ?>";
            if (alertMsg == "exist") {
                const notyf = new Notyf();
                notyf.error({
                    message: 'This email address is already exists',
                    duration: 6000,
                })
            } else if (alertMsg == "error to sign up") {
                const notyf = new Notyf();
                notyf.error({
                    message: 'Something had happened wrong',
                    duration: 6000,
                })
            }
        })
    </script>
    <script src="../assets/js/sign-in.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
</body>

</html>