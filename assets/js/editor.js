let toggles = document.querySelectorAll(".toggle")
let fill_sections = document.querySelectorAll(".fill_section")
let col_header = document.querySelectorAll(".col_header")

// start here
// this variable of the personal form
let personal_information = {}
let save_personal = document.getElementById("personalForm")
let first_name = document.getElementById("first-name")
let last_name = document.getElementById("last-name")
let email_address = document.getElementById("email-address")
let Headline = document.getElementById("Headline")
let PhoneNumber = document.getElementById("PhoneNumber")
let location_Address = document.getElementById("Address")
let DateBirth = document.getElementById("DateBirth")
// end here

// start here
// this variable of the profile form
let save_profile = document.getElementById("profileForm")
let about_me = document.getElementById("aboutme")
// end here

// start here
// this variable of the education form
let save_education = document.getElementById("educationForm")
let formEducation = document.getElementById("formEducation")
let education_input = document.getElementById("educationInput")
let school_name = document.getElementById("school-name")
let city_name = document.getElementById("city-name")
let start_date_month = document.getElementById("start-date-month")
let start_date_year = document.getElementById("start-date-year")
let end_date_month = document.getElementById("end-date-month")
let end_date_year = document.getElementById("end-date-year")
let education_description = document.getElementById("education-description")
let present_check = document.getElementById("present")
// end here

// start here
// this variable of the employment form
let save_employment = document.getElementById("employmentForm")
let employmentContainer = document.getElementById("employmentContainer")
let employment = document.getElementById("employment")
let position_post = document.getElementById("position-post")
let city_nameE = document.getElementById("city-nameE")
let start_date_monthE = document.getElementById("start-date-monthE")
let start_date_yearE = document.getElementById("start-date-yearE")
let end_date_monthE = document.getElementById("end-date-monthE")
let end_date_yearE = document.getElementById("end-date-yearE")
let education_descriptionE = document.getElementById("education-description-E")
let present_checkE = document.getElementById("em_present")
// end here

// start here
// this variable of the skills form
let save_formskill = document.getElementById("formskill")
let skillForm = document.getElementById("skillForm")
let profileFormConatiner = document.getElementById("profileFormConatiner")
let skill_name = document.getElementById("skill")
let skill_level = document.getElementById("level-skill")
let text_level = document.getElementById("level-text")
// end here

// start here
// this variable of the languages form
let save_formlanguage = document.getElementById("formlanguage")
let LanguageForm = document.getElementById("LanguageForm")
let language_name = document.getElementById("language")
let language_level = document.getElementById("language-level")
let language_text = document.getElementById("language-text")
// // end here

// start here
// this variable of the hobbies form
let save_hobby = document.getElementById("hobbyForm")
let hobby_name = document.getElementById("hobby")
// end here

let levels = ["basic", "novice", "intermediate", "advanced", "expert"]
let lengthChart = document.querySelectorAll(".length")
let template = ""
let dateMonth = document.querySelectorAll(".dateMonth")
let dateYear = document.querySelectorAll(".dateYear")


const months = ["Month", "01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"]
const years = ["Year", 2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030]
let printButton = document.getElementById("printBtn")
let profileInput = document.getElementById("user-profile")
let downloadPdf = document.getElementById("download-pdf")


function insertData(b1, b2) {
    let option = ""
    let hidden = "hidden"
    for (let a = 0; a < b2.length; a++) {
        if (a == 0) {
            option += `<option value="${b2[a]}" ${hidden}>${b2[a]}</option>`
        }
        else {
            option += `<option value="${b2[a]}">${b2[a]}</option>`
        }
    }
    b1.innerHTML = option
}

for (let c = 0; c < dateMonth.length; c++) {
    insertData(dateMonth[c], months)
}
for (let c = 0; c < dateYear.length; c++) {
    insertData(dateYear[c], years)
}




// This function is about loader when data saved on database
function saveData() {
    let saved = document.querySelectorAll(".saved");
    saved[1].setAttribute("name", "refresh-circle-outline");
    saved[1].classList.add('load');
    setTimeout(() => {
        saved[1].classList.remove('load');
        saved[1].setAttribute("name", "cloud-done-outline");
    }, 700); 
}




// start here
// these code is about toggle the forms in right sidebar
toggles.forEach((toggleButton, index) => {
    toggleButton.addEventListener("click", function () {
        removeActiveClass()
        fill_sections[index].classList.add("activeToggle");
        col_header[index].style.borderRadius = "0.3rem 0.3rem 0 0";
    })
})

function removeActiveClass() {
    fill_sections.forEach((fill_section) => {
        fill_section.classList.remove("activeToggle")
    })
}
// end here

// start here
// this function is about to get infomartion from personal form
save_personal.addEventListener("input", () => {
    let first_name_cv = document.getElementById("first-name-cv")
    let last_name_cv = document.getElementById("last-name-cv")
    let email_cv = document.getElementById("email-cv")
    let headline_cv = document.getElementById("headline-cv")
    let phone_cv = document.getElementById("phone-cv")
    let address_location_cv = document.getElementById("address-location-cv")
    let date_birth_cv = document.getElementById("date-birth-cv")


    // add values from inputs to its places
    first_name_cv.innerText = first_name.value
    last_name_cv.innerText = last_name.value
    email_cv.innerText = email_address.value
    headline_cv.innerText = Headline.value
    phone_cv.innerText = PhoneNumber.value
    address_location_cv.innerText = location_Address.value
    date_birth_cv.innerText = DateBirth.value
    saveData()
})
// end here

// start here
// this function is about to get infomartion from profile form
save_profile.addEventListener("input", () => {
    let about_me_cv = document.getElementById("about-me-cv")
    about_me_cv.innerText = about_me.value
    saveData()
})

function calcLength(formContainer, lengthContainer, sourceContainer, limit) {
    formContainer.addEventListener("input", () => {
        lengthContainer.innerHTML = sourceContainer.value.length;
        if (sourceContainer.value.length >= limit) {
            sourceContainer.addEventListener('keypress', preventTyping);
        } else {
            sourceContainer.removeEventListener('keypress', preventTyping);
        }
    })
    function preventTyping(e) {
        e.preventDefault();
    }
    saveData()
}
calcLength(save_profile, lengthChart[0], about_me, 300)
calcLength(formEducation, lengthChart[1], education_description, 300)
calcLength(employmentContainer, lengthChart[2], education_descriptionE, 300)

// end here

// start here
// this function is about to get infomartion from education form
save_education.addEventListener("click", () => {
    // let profile_information = document.getElementsByClassName("educationCV")
    let col_education = document.getElementById("col_education")
    let aa = start_date_year.value
    let bb = start_date_month.value
    let cc = end_date_month.value
    let dd = end_date_year.value
    template = `
        <ul>
            <li>
                <h3>${education_input.value}</h3>
                <h5>${school_name.value}</h5>
                <p>${bb}/${aa} - ${cc}/${dd}  ${city_name.value}</p>
            </li>
        </ul>
    `
    col_education.innerHTML += template;
    saveData()
    // education_description.value
    // present_check.checked
})
// end here

// start here
// this function is about to get infomartion from employment form
save_employment.addEventListener("click", () => {
    present_checkE.checked
    let col_experience = document.getElementById("col_experience")
    let aa = start_date_monthE.value
    let bb = start_date_yearE.value
    let cc = end_date_monthE.value
    let dd = end_date_yearE.value

    template = `
    <div style="margin: 15px 0px;">
        <section><h3 style="text-transform: uppercase; display:inline-block">${position_post.value} </h3> | <span>${aa}/${bb} - ${cc}/${dd}</span></section>
        <span style="text-transform: capitalize;margin: 5px 0 5px 0;display: inline-block;">${employment.value} | ${city_nameE.value}</span>
        <p style="color: #787373;">${education_descriptionE.value}</p>
    </div>
    `
    col_experience.innerHTML += template;
    saveData()
})
// end here

// start here
// this function is about to get infomartion from skills and languges forms
function manageForm(frm, frmS, aa, bb, cc, varnm, skilnm) {
    let der = document.getElementById(varnm)
    frm.addEventListener("input", () => {
        for (let i = 0; i < aa.length; i++) {
            if (bb.value == i) {
                cc.value = aa[i]
            }
        }
    })
    frmS.addEventListener("click", () => {
        template = `
        <ul>
            <li style="margin: 0.2rem 0 0 0.6rem; font-size: 0.94rem; text-transform: uppercase;">${skilnm.value} <span style="color: #252525;">(${cc.value})</span></li>
        </ul>`
        der.innerHTML += template
        saveData()
    })
}
manageForm(save_formskill, skillForm, levels, skill_level, text_level, "col_skills", skill_name)
manageForm(save_formlanguage, LanguageForm, levels, language_level, language_text, "col_language", language_name)
// end here

// start here
// this function is about to get infomartion from hoppies form
save_hobby.addEventListener("click", () => {
    let col_hoppy = document.getElementById("col_hoppy")
    template = `
    <ul>
        <li style="margin: 0.2rem 0 0 0.6rem; font-size: 0.94rem; text-transform: uppercase;">${hobby_name.value}</li>
    </ul>`

    col_hoppy.innerHTML += template
    saveData()
})
// end here


// Function print resume for user 
printButton.addEventListener("click", () => {
    let printContent = document.getElementById("resume-container").innerHTML;
    let originalContent = document.body.innerHTML;
    document.body.innerHTML = printContent;
    print();
    document.body.innerHTML = originalContent;
    window.location.reload()
})


// Function take profile from input and show it in resume 
profileInput.addEventListener("change", () => {
    let userProfile = document.getElementById("profile")
    const reader = new FileReader();
    reader.onload = function (e) {
        userProfile.src = e.target.result;
    }
    reader.readAsDataURL(profileInput.files[0]);
    saveData()
})


// Prevent user from got out
window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
});



// Function to download PDF after converted 
downloadPdf.addEventListener('click', function (e) {
    const element = document.getElementById('template-html');
    html2canvas(element).then(canvas => {
        const imgData = canvas.toDataURL('image/png');
        const { jsPDF } = window.jspdf;
        const pdf = new jsPDF();
        const imgProps = pdf.getImageProperties(imgData);
        const pdfWidth = pdf.internal.pageSize.getWidth();
        const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
        pdf.addImage(imgData, 'PNG', 0, 0, pdfWidth, pdfHeight);
        pdf.save(`${userName} resume.pdf`);
    });
});