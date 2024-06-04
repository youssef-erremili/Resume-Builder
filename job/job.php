<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings - Errehub</title>
    <link rel="stylesheet" href="../assets/styles/job.css">
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
                    <li class="parent">
                        services
                        <ion-icon id="rotate" name="chevron-down-outline"></ion-icon>
                        <div id="drop">
                            <ul>
                                <li>
                                    <a href="../editor/editor.php">
                                        <ion-icon name="build"></ion-icon>
                                        build resume
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../template/template.php">templates</a></li>
                    <li id="selected"><a class="selected" href="job.php">jobs</a></li>
                    <li><a href="../blog/blog.php">blog</a></li>
                    <li><a href="../blog/topic.php?id=2&title=about-us&image=../assets/image/about-us.webp">about</a></li>
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
    <h1>Discover Job Opportunities with Our New <br> Job Listing API in Resume Builder</h1>
    <p class="subtitle">Introducing our latest feature in Resume Builder: the Job Listing API! Search and apply for jobs directly from your resume builder with real-time listings and tailored recommendations. Start
        building your resume and find your dream job today!</p>
    <div id="loader" class="loader"></div>
    <div id="jobsContainer" class="hidden"></div>
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
                <p>At <a class="footInd" href="../index.php">errehub</a>, we make it easy to build a standout resume. Our user-friendly CV builder is designed for simplicity, helping you showcase your unique skills effortlessly. Join us and create your standout resume at our website.</p>
            </div>
            <div class="footCol services">
                <h3>services</h3>
                <ul>
                    <li><a href="../editor/editor.php"><ion-icon name="chevron-forward-outline"></ion-icon> Resume builder</a></li>
                    <li><a href="../job/job.php"><ion-icon name="chevron-forward-outline"></ion-icon> Job</a></li>
                    <li><a href="../template/template.php"><ion-icon name="chevron-forward-outline"></ion-icon> Templates</a></li>
                    <li><a href="../blog/blog.php"><ion-icon name="chevron-forward-outline"></ion-icon> Blog</a></li>
                </ul>
            </div>
            <div class="footCol link">
                <h3>useful links</h3>
                <ul>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Privacy policy</a></li>
                    <li><a href=""><ion-icon name="chevron-forward-outline"></ion-icon> Terms and conditions</a></li>
                    <li><a href="../blog/topic.php?id=2&title=about-us&image=../assets/image/about-us.webp"><ion-icon name="chevron-forward-outline"></ion-icon> About</a></li>
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


    <script src="../assets/js/job.js"></script>
    <script src="../assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>