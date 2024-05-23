let submitForm = document.querySelector(".submitForm")
let FullName = document.getElementById("FullName")
let EmailAddress = document.getElementById("EmailAddress")
let inputPass = document.querySelectorAll(".inputField")
let showPass = document.querySelectorAll(".password")

// Show/hide password
function showPassword(element, inputField) {
    if (inputField.type === "password") {
        inputField.type = "text";
        element.src = "../assests/image/hide.svg";
    } else {
        inputField.type = "password";
        element.src = "../assests/image/show.svg";
    }
}

showPass.forEach((passwordIcon, index) => {
    passwordIcon.addEventListener("click", () => {
        showPassword(passwordIcon, inputPass[index]);
    })
})



// Form validation
function validateForm(event) {
    if (FullName.value.trim() === "" && EmailAddress.value.trim() === "" && inputPass[0].value.trim() === "" && inputPass[1].value.trim() === "") {
        event.preventDefault()
        redCheck(inputPass[1]);
        redCheck(inputPass[0]);
        redCheck(EmailAddress);
        redCheck(FullName);
        var notyf = new Notyf();
        notyf.error('Please ensure all fields are filled out as they are necessary for completion');
        return false
    }
    else {
        resetStyles();
        // FullName validation
        let regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
        if (!regName.test(FullName.value.trim())) {
            redCheck(FullName);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('You must fill out your full name.');
            return false;
        }

        // Email validation
        let regEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        if (!regEmail.test(EmailAddress.value.trim())) {
            redCheck(EmailAddress);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('You must provide a valid email address.');
            return false;
        }
        // Password validation
        const regPassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()-_+=])[A-Za-z\d!@#$%^&*()-_+=]{10,}$/;
        if (!regPassword.test(inputPass[0].value.trim())) {
            redCheck(inputPass[0]);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('You must fill out more than 10 characters, using a combination of uppercase and lowercase letters, symbols, and numbers.');
            return false;
        }
        if (inputPass[1].value.trim() !== inputPass[0].value.trim()) {
            redCheck(inputPass[1]);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('The password does not match');
            return false;
        }
        return true;
    }
}


function resetStyles() {
    [FullName, EmailAddress, ...inputPass].forEach(element => {
        element.style.borderBottom = "";
        element.style.backgroundColor = "";
    });
}


function redCheck(value) {
    value.focus();
    value.style.borderBottom = "0.130rem solid #ED2939";
}

//submit the values to Database
submitForm.addEventListener("submit", validateForm);
