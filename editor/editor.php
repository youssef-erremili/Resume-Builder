<?php
session_start();
include("../config/config.php");
if (!isset($_SESSION["loggedin"])) {
    header("location: ../login/login.php");
    exit;
}


$resume_template = "";
$alertMsg = "";
if (isset($_GET["resume-id"])) {
    $resume_id = $_GET["resume-id"];
    $query = "SELECT resume_template FROM templates WHERE resume_id = $resume_id";
    $stmt = $serverConnection->prepare($query);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $resume_template = $row["resume_template"];
    }
} else {
    $alertMsg = "none";
}


$serverConnection = null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor App</title>
    <link rel="stylesheet" href="../assets/styles/editor.css">
    <link rel="stylesheet" href="../assets/styles/style.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <main>
        <div class="navbar">
            <nav>
                <ul>
                    <li>
                        <span>
                            <a href="../index.php?user=<?php echo $_SESSION["User-Name"] ?>"><ion-icon name="arrow-back-outline"></ion-icon> <?php echo $_SESSION["User-Name"] ?></a>
                            <a href="../logout/logout.php"><ion-icon name="log-out-outline"></ion-icon>log out</a>
                        </span>
                    </li>
                    <li><a href="" class="saved">saved changes <ion-icon class="saved" name="cloud-done-outline"></ion-icon></a></li>
                    <li>
                        <span>
                            <button id="printBtn"><ion-icon name="print-outline"></ion-icon> print</button>
                            <button id="download-pdf"><ion-icon name="arrow-down-outline"></ion-icon> download</button>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="fill_container">
            <div class="fill-col left" id="template-html">
                <?php echo $resume_template; ?>
            </div>
            <div class="fill-col right">
                <div class="header_titles">
                    <div class="columnEditor personal_details">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>personal details</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section personal-ed764">
                                <form action="" id="personalForm" method="">
                                    <div class="formContainer">
                                        <div>
                                            <label for="user-profile">picture</label>
                                            <div class="yt75">
                                                <input type="file" accept="image/png, image/jpeg, image/jpg" name="picture" id="user-profile">
                                            </div>
                                        </div>
                                        <div class="t54hdy">
                                            <div>
                                                <section class="section_64u firstSection">
                                                    <label for="first-name">first name</label>
                                                    <input type="text" name="first-name" id="first-name" class="form_input" placeholder="first name">
                                                </section>
                                                <section class="section_64u secondSection">
                                                    <label for="last-name">last name</label>
                                                    <input type="text" name="last-name" id="last-name" class="form_input" placeholder="last name">
                                                </section>
                                            </div>
                                            <div class="lastSection">
                                                <label for="email-address">email address</label>
                                                <input type="text" name="email-address" id="email-address" class="form_input" placeholder="email address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="formY65t">
                                        <div class="Headline">
                                            <label for="Headline">Headline</label>
                                            <input type="text" name="Headline" id="Headline" class="form_input" placeholder="Headline">
                                        </div>
                                        <div class="PhoneNumber">
                                            <label for="PhoneNumber">Phone number</label>
                                            <input type="text" name="PhoneNumber" id="PhoneNumber" class="form_input" placeholder="Phone number">
                                        </div>
                                        <div class="Address">
                                            <label for="Address">Address</label>
                                            <input type="text" name="Address" id="Address" class="form_input" placeholder="Address">
                                        </div>
                                        <div class="DateBirth">
                                            <label for="DateBirth">Date of birth</label>
                                            <input type="date" name="DateBirth" id="DateBirth" class="form_input" placeholder="Date of birth">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor profile">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>profile</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section profile-yr6t">
                                <form action="" method="" id="profileForm">
                                    <div style="position: relative;">
                                        <label for="aboutme">Description</label>
                                        <span class="lengthConatiner"><span class="length">4</span>/150</span>
                                        <textarea cols="30" rows="7" name="aboutme" id="aboutme" class="about-ytc7">I am</textarea>
                                        <div class="text-editor">
                                            <ul>
                                                <span>
                                                    <li><input type="number" name="size" id="size" min="6" max="60" value="16"></li>
                                                </span>
                                                <span>
                                                    <li><button type="button"><box-icon name='bold'></box-icon></button>
                                                    </li>
                                                    <li><button type="button"><box-icon name='italic'></box-icon></button></li>
                                                    <li><button type="button"><box-icon name='underline'></box-icon></button></li>
                                                </span>
                                                <span>
                                                    <li><button type="button"><box-icon name='align-left'></box-icon></button></li>
                                                    <li><button type="button"><box-icon name='align-middle'></box-icon></button></li>
                                                    <li><button type="button"><box-icon name='align-right'></box-icon></button></li>
                                                </span>
                                                <span>
                                                    <li><input type="color" name="color" id="color"><box-icon name='color-fill'></box-icon></li>
                                                </span>
                                            </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor education">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>education</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section education-ed764">
                                <form action="" method="post" id="formEducation">
                                    <div class="box box1">
                                        <label for="educationInput">education</label>
                                        <input type="text" name="educationInput" id="educationInput" class="form_input" placeholder="education">
                                    </div>
                                    <div class="box box2">
                                        <div>
                                            <section class="section_xye64 schoolSection">
                                                <label for="school-name">school name</label>
                                                <input type="text" name="school-name" id="school-name" class="form_input" placeholder="school name">
                                            </section>
                                            <section class="section_xye64 citySection">
                                                <label for="city-name">city</label>
                                                <input type="text" name="city-name" id="city-name" class="form_input" placeholder="city">
                                            </section>
                                        </div>
                                        <div class="dates">
                                            <section>
                                                <label for="start-date">Start date</label>
                                                <div>
                                                    <select name="start-date-month" class="dateMonth" id="start-date-month"></select>
                                                    <select name="start-date-year" class="dateYear" id="start-date-year"></select>
                                                </div>
                                            </section>
                                            <section>
                                                <label for="end-date">End date</label>
                                                <div class="present">
                                                    <input type="checkbox" name="present" id="present">
                                                    <label for="present">Present</label>
                                                </div>
                                                <div>
                                                    <select name="start-date-month" class="dateMonth" id="end-date-month"></select>
                                                    <select name="start-date-year" class="dateYear" id="end-date-year"></select>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="box box3">
                                        <div style="position: relative;">
                                            <label for="education">Description</label>
                                            <span class="lengthConatiner"><span class="length">9</span>/150</span>
                                            <textarea cols="30" rows="7" name="education" id="education-description" class="edu-ytc7">I studied</textarea>
                                            <div class="text-editor">
                                                <ul>
                                                    <span>
                                                        <li><input type="number" name="size" id="size" min="6" max="60" value="16"></li>
                                                    </span>
                                                    <span>
                                                        <li><button type="button"><box-icon name='bold'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='italic'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='underline'></box-icon></button></li>
                                                    </span>
                                                    <span>
                                                        <li><button type="button"><box-icon name='align-left'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='align-middle'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='align-right'></box-icon></button></li>
                                                    </span>
                                                    <span>
                                                        <li><input type="color" name="color" id="color"><box-icon name='color-fill'></box-icon></li>
                                                    </span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnSave">
                                        <button type="button" id="educationForm">
                                            <ion-icon name="add-outline"></ion-icon> save </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor employment">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>employment</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section employment-ed764">
                                <form action="" method="post" id="employmentContainer">
                                    <div class="box box1">
                                        <label for="position-post">Position</label>
                                        <input type="text" name="Position" id="position-post" class="form_input" placeholder="Position">
                                    </div>
                                    <div class="box box2">
                                        <div>
                                            <section class="section_xye64EM EmploymentSection">
                                                <label for="employment">Company</label>
                                                <input type="text" name="Employment" id="employment" class="form_input" placeholder="Company">
                                            </section>
                                            <section class="section_xye64EM citySection">
                                                <label for="city-nameE">city</label>
                                                <input type="text" name="city-nameE" id="city-nameE" class="form_input" placeholder="city">
                                            </section>
                                        </div>
                                        <div class="EmployerDates">
                                            <section>
                                                <label for="start-month-dateE">Start date</label>
                                                <div>
                                                    <select name="start-date-monthE" class="dateMonth" id="start-date-monthE"></select>
                                                    <select name="start-date-yearE" class="dateYear" id="start-date-yearE"></select>
                                                </div>
                                            </section>
                                            <section>
                                                <label for="end-date-monthE">End date</label>
                                                <div class="em_present">
                                                    <input type="checkbox" name="empresent" id="em_present">
                                                    <label for="em_present">Present</label>
                                                </div>
                                                <div>
                                                    <select name="end-date-month" class="dateMonth" id="end-date-monthE"></select>
                                                    <select name="end-date-yearE" class="dateYear" id="end-date-yearE"></select>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <div class="box box3">
                                        <div style="position: relative;">
                                            <label for="education">Description</label>
                                            <span class="lengthConatiner"><span class="length">9</span>/150</span>
                                            <textarea cols="30" rows="7" name="education" id="education-description-E" class="edu-ytc7">I Word at</textarea>
                                            <div class="text-editor">
                                                <ul>
                                                    <span>
                                                        <li><input type="number" name="size" id="size" min="6" max="60" value="16"></li>
                                                    </span>
                                                    <span>
                                                        <li><button type="button"><box-icon name='bold'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='italic'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='underline'></box-icon></button></li>
                                                    </span>
                                                    <span>
                                                        <li><button type="button"><box-icon name='align-left'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='align-middle'></box-icon></button></li>
                                                        <li><button type="button"><box-icon name='align-right'></box-icon></button></li>
                                                    </span>
                                                    <span>
                                                        <li><input type="color" name="color" id="color"><box-icon name='color-fill'></box-icon></li>
                                                    </span>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="btnSave">
                                        <button type="button" id="employmentForm">
                                            <ion-icon name="add-outline"></ion-icon> save </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor skills">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>skills</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section skill-ed764">
                                <form action="" method="" id="formskill">
                                    <div class="skillCon">
                                        <section>
                                            <label for="skill">skill</label>
                                            <input type="text" name="skill" id="skill" class="form_input" placeholder="skill">
                                        </section>
                                        <section>
                                            <label for="skill">level</label>
                                            <input type="text" name="level-text" id="level-text" value="basic">
                                            <input type="range" name="level-skill" value="0" id="level-skill" min="0" max="4" class="form_input">
                                        </section>
                                    </div>
                                    <div class="btnSave">
                                        <button type="button" id="skillForm">
                                            <ion-icon name="add-outline"></ion-icon>
                                            save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor languages">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>languages</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section language-ed764">
                                <form action="" method="" id="formlanguage">
                                    <div class="skillConL">
                                        <section>
                                            <label for="Language">Language</label>
                                            <input type="text" name="language" id="language" class="form_input" placeholder="Language">
                                        </section>
                                        <section>
                                            <label for="Language">level</label>
                                            <input type="text" name="language-text" id="language-text" value="basic">
                                            <input type="range" name="language-level" value="0" id="language-level" min="0" max="4" class="form_input">
                                        </section>
                                    </div>
                                    <div class="btnSave">
                                        <button type="button" id="LanguageForm">
                                            <ion-icon name="add-outline"></ion-icon>
                                            save
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="columnEditor hobbies">
                        <div class="col_container">
                            <div class="col_header">
                                <h3>hobbies</h3>
                                <ion-icon class="toggle" name="add-outline"></ion-icon>
                            </div>
                            <div class="fill_section hobbies-ed764">
                                <form action="" method="">
                                    <div class="">
                                        <section>
                                            <label for="hobby">hobby</label>
                                            <input type="text" name="hobby" id="hobby" class="form_input" placeholder="hobby">
                                        </section>
                                    </div>
                                    <div class="btnSave">
                                        <button type="button" id="hobbyForm">
                                            <ion-icon name="add-outline"></ion-icon> save </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const notyf = new Notyf();
            const userName = "<?php echo addslashes($_SESSION['User-Name']); ?>";
            const alertMsg = "<?php echo addslashes($alertMsg); ?>";
            notyf.success({
                message: `Welcome Mr. ${userName}`,
                duration: 6000,
            });

            if (alertMsg === "none") {
                notyf.error({
                    message: 'Please select a resume first. Thanks!',
                    duration: 12000,
                });
            }
        });
    </script>
    <script src="../assets/js/editor.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
</body>
</html>