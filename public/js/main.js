// ---Burger menu START---
document.querySelector('.burger').onclick = () => {
    document.querySelector('.burger-hidden-none').classList.toggle("burger-hidden-block");
}
// ---Burger menu STOP---

// ---Slider START---
let slideIndex = 1;
showSlides(slideIndex);

function plusSlide() {
    showSlides(slideIndex += 1);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("item");
    if (n > slides.length) {
        slideIndex = 1
    }
    
    if (n < 1) {
        slideIndex = slides.length
    }
    
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
// ---Slider STOP---