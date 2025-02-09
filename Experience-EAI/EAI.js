let currentIndex = 0;
const slides = document.getElementById("slides");
const totalSlides = document.querySelectorAll(".slide").length;

function updateSlide() {
    console.log(currentIndex);
    slides.style.transform = `translateX(-${currentIndex * 100 / totalSlides}%)`;
}

function nextSlide() {
    if (currentIndex < totalSlides - 1) {
        currentIndex += 1;
        updateSlide();
    }
}

function prevSlide() {
    if (currentIndex > 0) {
        currentIndex -= 1;
        updateSlide();
    }
}

document.addEventListener("keydown", (event) => {
    if (event.key === "ArrowRight") nextSlide();
    if (event.key === "ArrowLeft") prevSlide();
});