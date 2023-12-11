document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkModeToggle');

    darkModeToggle.addEventListener('change', function () {
      document.body.classList.toggle('dark-mode', darkModeToggle.checked);
      toggleDarkModeElements(darkModeToggle.checked);
    });

    // Function to toggle dark mode for specific elements with different classes and tags
    function toggleDarkModeElements(isDarkMode) {
      const elementsToToggle = document.querySelectorAll('.dark-view');

      elementsToToggle.forEach(function (element) {
        element.classList.toggle('dark-mode', isDarkMode);
      });
    }
    
  });
  function myFunction() {
const myDiv = document.getElementById('hero');

// Check the current background image
const currentImage = myDiv.style.backgroundImage;

// Toggle between two different background images
if (currentImage.includes('assets/frontEnd/web/images/remove.png')) {
  myDiv.style.backgroundImage = "url({{ asset('assets/frontEnd/web/images/dark-bg.png')}} )";
} else {
  myDiv.style.backgroundImage = "url({{ asset('assets/frontEnd/web/images/dark-bg.png')}} )";
}

}