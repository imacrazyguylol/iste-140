// ==============================
// gallery.js
// ==============================
// This JavaScript file makes one image on the Course Homepage
// change automatically every few seconds.

// Step 1: Create a list (array) of image file names.
// Each item in the array is the path to one image file.
// Use your actual image filenames instead of "photo..."
var images = [
  "assets/images/slide-beans.png",
  "assets/images/slide-shop.jpg",
  "assets/images/slide-mocha.jpg",
];

// Step 2: Create a variable to keep track of which image is showing now.
// Start at 0 because arrays begin counting from zero.
var i = 0;

// Step 3: Find the <img> element in the HTML that will display the images.
// document.getElementById() looks in the HTML for an element with that id.
var slide = document.getElementById("slide");

// Step 4: Define a function named nextImage() that moves to the next image.
function nextImage() {

  // Add 1 to the index number so we move to the next image in the list.
  // Remember that "=" is not "equals," it's the assignment operator.
  i = i + 1;

  // If we reach the end of the list (the index equals the total number of images),
  // then wrap around and start back at the first image (index 0).
  if (i === images.length) {
    i = 0;
  }

  // Change the "src" of the <img> element to the new file name in the list.
  // This makes the browser display a different picture.
  slide.src = images[i];

  // Update the "alt" text so it matches the new image.
  // This helps people using screen readers know what image is showing.
  slide.alt = "Image " + (i + 1);
}

// Step 5: Show the first image right away.
// This ensures the slideshow starts with the first image in the list.
slide.src = images[i];

// Step 6: Set up a timer that automatically calls the nextImage() function.
// setInterval() runs the function repeatedly after the given number of milliseconds.
// 3000 milliseconds = 3 seconds.
setInterval(nextImage, 3000);