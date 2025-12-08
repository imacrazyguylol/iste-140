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
        dropdownBtn.innerHTML = "x";
    }
    dropdownBtn.setAttribute("aria-expanded", expanded);
    navbar.setAttribute("aria-expanded", expanded);
}