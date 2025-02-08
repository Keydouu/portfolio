let currentIndex = 0;
const slides = document.getElementById("slides");
const totalSlides = document.querySelectorAll(".slide").length;

function updateSlide() {
    console.log(currentIndex);
    slides.style.transform = `translateX(-${currentIndex * 100 / totalSlides}%)`;
    if(isSpeaking)
        startSpeech();
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

new Chart("chartResultats", {
    type: "bar",
    data: {
        labels: ['Ancien Solveur', 'Nouveau Solveur', 'Meilleure Solution'],
        datasets: [{
            label: 'Minutess supplémentaires moyennes par semaine',
            data: [144, 116, 104],
            backgroundColor: ['red', 'blue', 'green']
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true // Ensures bars start from 0
            }
        },
        legend: { display: false },
        title: {
            display: false
        }
    }
});

const texts = [
    document.getElementById("txt1-1").innerText + " " + document.getElementById("txt1-2").innerText,
    document.getElementById("txt2").innerText,
    document.getElementById("txt3").innerText,
    document.getElementById("txt4").innerText
];

let isSpeaking = false;
let utterance = null;

function startSpeech() {
    if (utterance) {
        speechSynthesis.cancel(); // Stop any ongoing speech
    }
    utterance = new SpeechSynthesisUtterance(texts[currentIndex]);
    utterance.lang = "fr-FR";
    speechSynthesis.speak(utterance);
    document.getElementById("ttsButton").innerText = "🔇";
    isSpeaking = true;
    utterance.onend = () => {
        document.getElementById("toggleButton").innerText = "🔊";
        isSpeaking = false;
    };
}


function stopSpeech() {
    speechSynthesis.cancel();
    document.getElementById("ttsButton").innerText = "🔊";
    isSpeaking = false;
}

function toggleSpeech() {
    if (isSpeaking){
        stopSpeech();
    } else {
        startSpeech();
    }
}
