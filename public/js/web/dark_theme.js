// Check local storage for the dark mode preference
const isDarkMode = localStorage.getItem("darkMode") === "true";

// Set the initial state based on the local storage value
document.body.classList.toggle("body-dark", isDarkMode);

window.onload = function () {
    const darkModeSections1 = document.querySelectorAll(".dark-mode-section1");
    const darkModeSections2 = document.querySelectorAll(".dark-mode-section2");
    const darkModeText = document.querySelectorAll(".dark-mode-text");

    // Apply dark mode styles to specific sections
    darkModeSections1.forEach((section) => {
        section.classList.toggle("dark-mode-background1", isDarkMode);
    });

    darkModeSections2.forEach((section) => {
        section.classList.toggle("dark-mode-background2", isDarkMode);
    });

    darkModeText.forEach((section) => {
        section.classList.toggle("dark-mode-text-dark", isDarkMode);
    });

    const image = document.getElementById("myImage");

    // Replace image source based on dark mode
    const baseUrl = window.location.origin;
    console.log(isDarkMode);

    if (isDarkMode) {
        image.src = baseUrl + "/assets/frontEnd/web/images/dark-background.png";
    } else {
        image.src =
            baseUrl + "/assets/frontEnd/web/images/light-background.png";
    }
};

function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle("body-dark");

    const darkModeSections1 = document.querySelectorAll(".dark-mode-section1");
    const darkModeSections2 = document.querySelectorAll(".dark-mode-section2");

    // Toggle dark mode styles for specific sections
    darkModeSections1.forEach((section) => {
        section.classList.toggle("dark-mode-background1");
    });

    darkModeSections2.forEach((section) => {
        section.classList.toggle("dark-mode-background2");
    });

    const image = document.getElementById("myImage");
}
