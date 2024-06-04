let parent = document.querySelector(".parent")
let drop = document.querySelector("#drop")
let rotate = document.querySelector("#rotate")
let toggleButns = document.querySelectorAll(".formBtn button")
let toggleContent = document.querySelectorAll(".formResult .content")
let scrollTop = document.getElementById("btnTop")
let toTop = document.querySelector('.toTop')





parent.addEventListener("click", () => {
    drop.classList.toggle("show")
    rotate.classList.toggle("icoRotate")
})


// the funtion is about switch between  butttons toggle
toggleButns.forEach((button, index) => {
    button.addEventListener("click", () => {
        removeActiveClass();
        button.classList.add("activeSwitch");
        toggleContent[index].classList.add("activeContent");
    })
})

function removeActiveClass() {
    toggleButns.forEach((button) => {
        button.classList.remove("activeSwitch")
    })
    toggleContent.forEach((Content) => {
        Content.classList.remove("activeContent")
    })
}

// this function is about to return to top just for good user experience
window.onscroll = function () {
    if (scrollY >= 1000) {
        toTop.classList.add("show")
        scrollTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            })
        })
    }
    else {
        toTop.classList.remove("show")
    }
}

// this function is about to scroll to any section without href 
function scrollToSection(sectionId) {
    var section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

//  this function is about when scrol down show navbar
document.addEventListener('DOMContentLoaded', function() {
    let navbar = document.querySelector(".nav");
    window.addEventListener('scroll', function() {
        if (window.scrollY > 180) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
