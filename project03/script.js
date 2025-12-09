const slideshow = document.getElementById("slideshow");
const images = [
    "assets/aigenerated.jpg",
    "assets/chatgpt.jpg",
    "assets/copyright_ai.jpeg",
    "assets/jensen.jpeg",
    "assets/nightshade_example.jpg"
]

const alts = [
    "An AI generated image of a man blended into a landscape of pine trees",
    "The chatGPT logo on a device screen",
    "A balance with the chatGPT symbol and copyright icon on either side",
    "Nvidia CEO Jensen Huang",
    "An example of a digital drawing with Nightshade applied to it. The effect is nearly unnoticable."
]

var i = 0;
function changeSlide() {
    slideshow.setAttribute("src", images[i]);
    slideshow.setAttribute("alt", alts[i]);

    i = (i + 1) % 5;
}

setInterval(changeSlide, 3000);

// Dropdown menu
const dropdownBtn = document.getElementById("dropdownBtn");
const navbar = document.getElementById("navbar");

function dropdown() {
    var expanded = dropdownBtn.getAttribute("aria-expanded");

    if (expanded == "true") {
        expanded = "false";
        dropdownBtn.innerHTML = "☰";
    } else {
        expanded = "true"
        dropdownBtn.innerHTML = "⨯";
    }
    dropdownBtn.setAttribute("aria-expanded", expanded);
    navbar.setAttribute("aria-expanded", expanded);
}