window.addEventListener('scroll',e=>{

    let navbar = document.getElementById('navbar').classList
    let active_class = "navbar_scrolled"
    if(pageYOffset > 2) navbar.add(active_class)
    else navbar.remove(active_class)
})

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n){
    showSlides(slideIndex += n);
}

function currentSlide(n){
    showSlides(slideIndex = n)
}
function showSlides(n){
    var i;
    var slides = document.getElementsByClassName("box-of-chasto-zakaz");
    if (n>slides.length) {
        slideIndex = 1;
    }
    if (n<1) {
        slideIndex = slides.length;
    }
    for (i = 0 ; i <slides.length ; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex-1].style.display = "block";
}