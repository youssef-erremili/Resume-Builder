<?php
// include_once($alertMsg);
// include($_SERVER["DOCUMENT_ROOT"]."/resume-builder/assests/php/signup.php"); 
session_start();
include($_SERVER["DOCUMENT_ROOT"] . "/resume-builder/config/config.php");

$alertMsg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = htmlspecialchars($_POST["FullName"]);
    $email_address = htmlspecialchars($_POST["EmailAddress"]);
    $user_password = htmlspecialchars($_POST["password"]);
    $firstQuery = "SELECT * FROM users WHERE email_address = :email_address";
    $stmt = $serverConnection->prepare($firstQuery);
    $stmt->bindParam(":email_address", $email_address, PDO::PARAM_STR);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $alertMsg = "exist";
    } else {
        $alertMsg = "new";
    }
}


$serverConnection = null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Errehub</title>
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
                    <?php echo $alertMsg; ?>
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
                        <img src="../assests/image/show.svg" alt="show-password" class="password" id="passIcon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="forth sectionYU">
                        <input type="password" name="passWord-confirm" id="Password2" spellcheck="false" class="inputField" autocomplete="off" placeholder="Conform Password">
                        <img src="../assests/image/show.svg" alt="show-password" class="password" id="passIcon">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <input type="submit" id="submit" value="Sign in">
                    <p class="havAccc">Already, I have an account <a href="../log-in/login.html">log in</a></p>
                </form>
                <p>By clicking the button, you are agreeing to our <strong><a id="terms" href="">Terms & conditions</a></strong></p>
            </div>
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            var alertMsg = "<?php echo $alertMsg; ?>";
            if (alertMsg == "exist") {
                console.log(alertMsg);
                const notyf = new Notyf();
                notyf.error({
                    message: 'The email address you provided already exists in our records',
                    duration: 9000,
                })
            }
        })
    </script>
    <script src="../assests/js/sign-in.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
</body>

</html>