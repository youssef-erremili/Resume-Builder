<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>title here</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="shortcut icon" href="../assests/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <a href="../index.html"><img src="../assests/errehub-wight.webp" alt="errehub logo"></a>
            </div>
            <nav>
                <ul>
                    <li class="parent">services
                        <ion-icon id="rotate" name="chevron-down-outline"></ion-icon>
                        <div id="drop">
                            <ul>
                                <li>
                                    <a href="">build resume</a>
                                </li>
                                <li>
                                    <a href="">cover letter</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="../template/template.html">templates</a></li>
                    <li><a onclick="scrollToSection('features')">features</a></li>
                    <li><a href="../blog/content.php">blog</a></li>
                    <li><a href="">about</a></li>
                </ul>
            </nav>
            <div class="getBtn">
                <a class="regBtn login" href="../log-in/login.html">log in</a>
                <a class="regBtn sign" href="../sign-up/sign-in.html">sign in</a>
            </div>
        </div>
    </header>
    <div class="header">
        <div class="head">
            <div class="headImg">
                <img src class="imageOfProduct" alt="image">
            </div>
        </div>
        <div class="m43reR">
            <div class="sideLeft">
                <div class="contentTopic">
                </div>
            </div>
            <div class="middleTopic">
                <div class="topicTitle">
                    <?php
                    $url_value = $_GET["id"];
                    include("../config/config.php");
                    $data_fetch = "SELECT title_content FROM blogs WHERE id = $url_value";
                    $container = mysqli_query($conToserver, $data_fetch);
                    if ($container->num_rows > 0) {
                        while ($row = $container->fetch_assoc()) {
                            echo "<h2>" . $row['title_content'] . "</h2>";
                        }
                    } else {
                        echo "No title found.";
                    }
                    ?>
                    <div class="dateShare">
                        <p><strong>errehub</strong></p>
                        <p>2024 Jun-24</p>
                    </div>
                </div>
                <?php
                // include("../config/config.php");
                $url_value = $_GET["id"];
                $fetch_data = "SELECT blog_content FROM blogs WHERE id = $url_value";
                $result = mysqli_query($conToserver, $fetch_data);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo $row["blog_content"];
                    }
                } else {
                    echo "No content found.";
                }
                ?>
            </div>
            <div class="sideRight">
                <div class="boxAd">
                    <h3>Build your resume in 5 minutes</h3>
                    <p>Use resume templates that follow the specific rules employers want</p>
                    <section>
                        <button>Build your resume</button>
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
                    <a class="getStarted footBtn" href="">build your resume</a>
                    <a class="leMore footBtn" href="">how it works</a>
                </div>
            </div>
        </div>
        <div class="mainFooter">
            <div class="footCol about">
                <a href="../index.html"><img src="../assests/errehub-dark.webp" alt="logo of the website Errehub"></a>
                <p>At <a class="footInd" href="../index.html">errehub</a>, we make it easy to build a standout resume.
                    Our
                    user-friendly CV builder is designed for simplicity, helping you showcase your unique skills
                    effortlessly. Join us and create your standout resume at our website.</p>
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
                    <a target="_blank" href="https://github.com/Youssef19er"><ion-icon
                    name="logo-github"></ion-icon></a>
                    <a target="_blank" href="https://www.linkedin.com/in/youssef-erremili-100070296/"><ion-icon
                    name="logo-linkedin"></ion-icon></a>
                    <a target="_blank" href="https://www.instagram.com/youssef.erremili.990/"><ion-icon
                    name="logo-instagram"></ion-icon></a>
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
    <script src="../main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script>
        let dataLink = new URLSearchParams(window.location.search)
        let imageIndex = dataLink.get("image")
        document.querySelector(".imageOfProduct").setAttribute("src", imageIndex)
    </script>
</body>

</html>