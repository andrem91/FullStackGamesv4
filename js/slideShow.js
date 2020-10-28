var slideIndex = 1;
showSlides(slideIndex);

function rolarSlides(n) {
    showSlides(slideIndex += n);
}

function escolherSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("imgSlides");
    var circulos = document.getElementsByClassName("circulo");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < circulos.length; i++) {
        circulos[i].className = circulos[i].className.replace(" selected", "");
    }
    slides[slideIndex-1].style.display = "block";
    circulos[slideIndex-1].className += " selected";
  }