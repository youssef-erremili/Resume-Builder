<?php
session_start();
include("config/config.php");
header("Location: index.php");
exit();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Builder - Errehub</title>
    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">
</head>

<body>
    <header>
        <div class="nav">
            <div class="logo">
                <a href="index.html"><img src="assets/image/errehub-wight.webp" alt="errehub logo"></a>
            </div>
            <nav>
                <ul>
                    <li class="parent">
                        services
                        <ion-icon id="rotate" name="chevron-down-outline"></ion-icon>
                        <div id="drop">
                            <ul>
                                <li>
                                    <a href="editor/editor.php">build resume</a>
                                </li>
                                <li>
                                    <a href="">cover letter</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="template/template.html">templates</a></li>
                    <li><a href="">features</a></li>
                    <li><a href="blog/content.php">blog</a></li>
                    <li><a href="">about</a></li>
                </ul>
            </nav>
            <div class="getBtn">
                <?php if (isset($_SESSION['user_name'])) : ?>
                    <span class="user-name">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?></span>
                    <a class="regBtn logout" href="logout.php">Log out</a>
                <?php else : ?>
                    <a class="regBtn login" href="login/login.php">Log in</a>
                    <a class="regBtn sign" href="signup/sign-up.php">Sign in</a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main>
        <div class="mainContainer">
            <div class="mainHeader">
                <div class="left">
                    <div class="textContent">
                        <h1>Create standout resumes with Errehub</h1>
                        <p>Use professional field-tested resume templates that follow the exact 'resume
                            rules' employers look for. Easy to use and done within minutes - try now for free!</p>
                    </div>
                    <div class="btnSetion">
                        <a href="editor/editor.php">build your resume</a>
                    </div>
                    <div class="card">
                        <span>No credit card required</span>
                    </div>
                </div>
                <div class="right">
                    <div class="imgContent">
                        <img src="assets/image/banner2.webp" alt="banner image">
                    </div>
                </div>
            </div>
        </div>
        <div class="features" id="features">
            <div class="headText">
                <h1>We are not the only ones in the market, but we are the best.</h1>
                <p>"In a crowded market, we proudly stand out as the absolute best, setting a standard that goes beyond the ordinary. The online resume creator you need to get hired faster."</p>
            </div>
            <div class="column">
                <div class="col col1">
                    <div class="contImg">
                        <img src="assets/image/easy.webp" alt="easy to use errehub">
                    </div>
                    <div class="contText">
                        <h2>Easy to use CV builder</h2>
                        <p>Craft your career effortlessly with our CV builder Easy to use, professional
                            results. change CV templates and customize fonts. No download required!"</p>
                        <a href="blog/content.php">How it works</a>
                    </div>
                </div>
                <div class="col col2">
                    <div class="contText">
                        <h2>Easy Resume Editing After Completion</h2>
                        <p>Transforming your CV building experience, Our commitment is to empower you with a
                            hassle-free process,Your professional journey begins with ease and flexibility, making us the ideal choice for your CV-building needs.</p>
                        <a href="blog/content.php">Blogs</a>
                    </div>
                    <div class="contImg">
                        <img src="assets/image/exportpdf.webp" alt="export to use in errehub">
                    </div>
                </div>
                <div class="col col3">
                    <div class="contImg">
                        <img src="assets/image/resources.webp" alt="resources of pdf errehub">
                    </div>
                    <div class="contText">
                        <h2>Free Resume template</h2>
                        <p>Check out our free CV examples, resume examples, and other career resources to
                            make the most of your job search. Stuck somewhere? We are here to answer your resume questions.</p>
                        <a href="template/template.html">Choose a template</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="createResume">
            <div class="headText">
                <h1>Create a Resume Online in Just 3 Easy Steps</h1>
                <p>"Crafting Careers, Three Clicks Away - Your Resume, Your Success!"</p>
            </div>
            <div class="formCreaet">
                <div class="formBtn">
                    <button class="activeSwitch removeSwitch pick" type="button">1. Pick a Template</button>
                    <button class="removeSwitch fill" type="button">2. Fill in the Blanks</button>
                    <button class="removeSwitch download" type="button">3. download your resume</button>
                </div>
                <div class="formResult formResult1">
                    <div class="content content1 activeContent">
                        <div class="contentLeft">
                            <h3>Register first</h3>
                            <p>After ensuring our website is the right fit for you, simply pick a template that matches your needs. This is your next step in the journey towards crafting a personalized and professional resume. Move forward effortlessly, tailoring your CV to showcase your unique strengths and skills. Your path to a standout resume is just a template away!
                            </p>
                        </div>
                        <div class="contentRight">
                            <img src="assets/image/register.svg" alt="register image">
                        </div>
                    </div>
                    <div class="content content2">
                        <div class="contentLeft">
                            <h3>achieve beauty with ease</h3>
                            <p>We've made sure that signing up to our resume maker tools is even more convenient than usual. Use one of the most common networks used by professionals (LinkedIn, Facebook oryour Google account) or simply skip this step and enter your name and email address. We keep your data strictly confidential.</p>
                        </div>
                        <div class="contentRight">
                            <img src="assets/image/customize.svg" alt="customize image">
                        </div>
                    </div>
                    <div class="content content3">
                        <div class="contentLeft">
                            <h3>hola!, download IT now</h3>
                            <p>After ensuring our website is the right fit for you, simply pick a template that matches your needs. This is your next step in the journey towards crafting a personalized and professional resume. Move forward effortlessly, tailoring your CV to showcase your unique strengths and skills. Your path to a standout resume is just a template away!
                            </p>
                        </div>
                        <div class="contentRight">
                            <img src="assets/image/download.svg" alt="download image">
                        </div>
                    </div>
                </div>
                <div class="formResult formResult2"></div>
                <div class="formResult formResult3"></div>
            </div>
        </div>
    </main>
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
                <a href="index.html"><img src="assets/image/errehub-dark.webp" alt="logo of the website Errehub"></a>
                <p>At <a class="footInd" href="index.html">errehub</a>, we make it easy to build a standout resume. Our user-friendly CV builder is designed for simplicity, helping you showcase your unique skills effortlessly. Join us and create your standout resume at our website.</p>
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





    <script src="assets/js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>