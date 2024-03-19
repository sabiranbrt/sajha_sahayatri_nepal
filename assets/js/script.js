// sticky navbar
document.addEventListener('DOMContentLoaded', () => {
    const navSticky = document.querySelector('.navigation');

    window.addEventListener('scroll', function () {
        navSticky.classList.toggle('sticky', window.scrollY > 0);
    });
})


// hamberger menu
document.addEventListener('DOMContentLoaded', () => {
    const hamMenu = document.querySelector('.hamburger_menu_wrapper');
    const menuBar = document.querySelectorAll('.bar')
    const menuItems = document.querySelector('.nav_wrapper')

    hamMenu.addEventListener('click', () => {
        menuItems.classList.toggle('show_menu')
        menuBar.forEach(bar => {
            bar.classList.toggle('change');
        })
    })
})

// slider Header
var swiper = new Swiper('.swiper', {
    effect: "fade",
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // Enable debugger
    debugger: true,
});


// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function () {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
}

// Close the Modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

