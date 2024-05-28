let inputPass = document.querySelectorAll(".inputField")
let showPass = document.querySelectorAll(".password")
let EmailAddress = document.getElementById("EmailAddress")
let submitForm = document.querySelector(".submitForm")



function showPassword(element, inputField) {
    if (inputField.type === "password") {
        inputField.type = "text";
        element.src = "../assets/image/hide.svg";
    } else {
        inputField.type = "password";
        element.src = "../assets/image/show.svg";
    }
}

showPass.forEach((passwordIcon, index) => {
    passwordIcon.addEventListener("click", () => {
        showPassword(passwordIcon, inputPass[index]);
    })
})

function loginForm(event) {
    if (EmailAddress.value.trim() === "" && inputPass[0].value.trim() === "") {
        event.preventDefault();
        redCheck(inputPass[0]);
        redCheck(EmailAddress);
        var notyf = new Notyf();
        notyf.error('Please make sure you enter the correct information.');
        return false;
    }
    else {
        if (EmailAddress.value.trim() === "") {
            redCheck(EmailAddress);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('Make sure you enter a your valid email address');
            return false;
        }
        if (inputPass[0].value.trim() === "") {
            redCheck(inputPass[0]);
            event.preventDefault();
            var notyf = new Notyf();
            notyf.error('Make sure you enter a your valid password');
            return false;
        }
        resetStyles();
        return true;
    }
}

function resetStyles() {
    [EmailAddress, inputPass[0]].forEach(element => {
        element.style.borderBottom = "";
        element.style.backgroundColor = "";
    });
}

function redCheck(value) {
    value.focus();
    value.style.borderBottom = "2px solid #ED2939";
}

submitForm.addEventListener("submit", loginForm);