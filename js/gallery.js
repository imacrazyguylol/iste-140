var images = [
    "images/space_resize.jpg",
    "images/matrix_2.jpg",
    "images/moog.jpg"
];

var i = 0;
var slide = document.getElementById("slide");

function nextImage() {
    i = i + 1;
    if (i === images.length) {
        i = 0;
    }

    slide.src = images[i];
    slide.alt = "Image " + (i + 1);
}

slide.src = images[i];
setInterval(nextImage, 3000);