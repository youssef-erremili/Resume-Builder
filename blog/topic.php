<?php
session_start();
include("../config/config.php");

$title = "";
$topic = "";
if (isset($_GET["id"])) {
    $url_value = $_GET["id"];
    $query = "SELECT title_content FROM blogs WHERE blog_id = $url_value";
    $stmt = $serverConnection->prepare($query);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $title =  $result['title_content'];
    } else {
        echo "No blog found";
    }
}

if (isset($_GET["id"])) {
    $url_value = $_GET["id"];
    $query = "SELECT blog_content FROM blogs WHERE blog_id = $url_value";
    $stmt = $serverConnection->prepare($query);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $topic =  $result['blog_content'];
    } else {
        echo "No blog found";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../assets/styles/blog.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <a href="../index.php"><img src="../assets/image/errehub-wight.webp" alt="errehub logo"></a>
            </div>
            <nav>
                <ul>
                    <li class="parent">services
                        <ion-icon id="rotate" name="chevron-down-outline"></ion-icon>
                        <div id="drop">
                            <ul>
                                <li>
                                    <a href="../editor/editor.php">build resume</a>
                                </li>
                                <li>
                                    <a href="">cover letter</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../template/template.php">templates</a></li>
                    <li><a href="">features</a></li>
                    <li><a href="../blog/content.php">blog</a></li>
                    <li><a href="../blog/topic.php?id=2&title=about-us&image=../assets/image/about-us.jpg">about</a></li>
                </ul>
            </nav>
            <div class="getBtn">
                <?php if (isset($_SESSION["User-Name"])) : ?>
                    <span class="regBtn"><?php echo htmlspecialchars($_SESSION["User-Name"]); ?></span>
                    <a class="regBtn" id="logout" href="../logout/logout.php">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </a>
                <?php else : ?>
                    <a class="regBtn login" href="../login/login.php">Log in</a>
                    <a class="regBtn sign" href="../signup/sign-up.php">Sign in</a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <div class="header">
        <div class="head">
            <div class="headImg">
                <img src="" class="imgtopic" alt="image topic">
            </div>
        </div>
        <div class="m43reR">
            <div class="sideLeft">
                <div class="contentTopic">
                </div>
            </div>
            <div class="middleTopic">
                <div class="topicTitle">
                    <h2><?php echo $title ?></h2>
                    <div class="dateShare">
                        <p><strong>errehub</strong></p>
                        <p>2024 Jun-24</p>
                    </div>
                </div>
                <?php echo $topic ?>
            </div>
            <div class="sideRight">
                <div class="boxAd">
                    <h3>Build your resume in 5 minutes</h3>
                    <p>Use resume templates that follow the specific rules employers want</p>
                    <section>
                        <a href="../template/template.html">Build your resume</a>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footHead">
            <div class="footLeft">
                <h2>Begin your epic journey with us today! Whether you seek job, we are here to serve you.</h2>
            </div>
            <div class="footRight">
                <div class="footBtn">
                    <a class="getStarted footBtn" href="../editor/editor.php">build your resume</a>
                </div>
            </div>
        </div>
        <div class="mainFooter">
            <div class="footCol about">
                <a href="../index.php"><img src="../assets/image/errehub-dark.webp" alt="logo of the website Errehub"></a>
                <p>At <a class="footInd" href="../index.php">errehub</a>, we make it easy to build a standout resume.
                    Our user-friendly CV builder is designed for simplicity, helping you showcase your unique skills
                    effortlessly. Join us and create your standout resume at our website.
                </p>
            </div>
            <div class="footCol services">
                <h3>services</h3>
                <ul>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Cv builder</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Cover letter</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Templates</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Features</a></li>
                </ul>
            </div>
            <div class="footCol link">
                <h3>useful links</h3>
                <ul>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Privacy policy</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Terms and conditions</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> How to use</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> FAQ</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> About</a></li>
                </ul>
            </div>
            <div class="footCol address">
                <h3>contact</h3>
                <ul>
                    <li><a href=""><ion-icon name="location-outline"></ion-icon>kenitra, Morocco</a></li>
                    <li><a href=""><ion-icon name="mail-outline"></ion-icon>errehub.cvbuilder@gmail.com</a></li>
                    <li><a href=""><ion-icon name="call-outline"></ion-icon>+212-682-313-601</a></li>
                </ul>
            </div>
            <div class="footCol follow">
                <h3>follow us</h3>
                <ul>
                    <a target="_blank" href="https://github.com/Youssef19er"><ion-icon name="logo-github"></ion-icon></a>
                    <a target="_blank" href="https://www.linkedin.com/in/youssef-erremili-100070296/"><ion-icon name="logo-linkedin"></ion-icon></a>
                    <a target="_blank" href="https://www.instagram.com/youssef.erremili.990/"><ion-icon name="logo-instagram"></ion-icon></a>
                </ul>
            </div>
        </div>
        <div class="resirved">
            <h3>Copyright © 2024 by errehub Website. All Right Reserved.</h3>
        </div>
        <div class="toTop">
            <button id="btnTop" class="btnTop">
                <ion-icon name="chevron-up-outline" role="img" class="md hydrated"></ion-icon>
            </button>
        </div>
    </footer>
    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
        let imgtopic = document.getElementsByClassName("imgtopic")[0];
        let dataLink = new URLSearchParams(window.location.search);
        let imageIndex = dataLink.get("image");
        if (imageIndex !== null && imgtopic) {
            imgtopic.src = imageIndex;
        }
    </script>
</body>

</html>