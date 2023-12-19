function toggleDarkMode() {
    const body = document.body;
    body.classList.toggle("body-dark");

    const darkModeSections = document.querySelectorAll(".dark-mode-section1");

    // Toggle dark mode styles for specific sections
    darkModeSections.forEach((section) => {
        section.classList.toggle("dark-mode-background1");
    });

    const darkModeotherSections = document.querySelectorAll(
        ".dark-mode-section2"
    );

    // Toggle dark mode styles for specific sections
    darkModeotherSections.forEach((section) => {
        section.classList.toggle("dark-mode-background2");
    });

    const image = document.getElementById("myImage");
    // const currentSrc = image.src;

    // Replace image source based on dark mode
    if (body.classList.contains("body-dark")) {
        image.src =
            "http://127.0.0.1:8000/assets/frontEnd/web/images/dark-background.png";
    } else {
        image.src =
            "http://127.0.0.1:8000/assets/frontEnd/web/images/light-background.png";
    }
}
