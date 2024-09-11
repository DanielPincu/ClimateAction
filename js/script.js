// Get the "back to top" button
const backToTopButton = document.getElementById('back-to-top');

// Add a click event listener to the button
backToTopButton.addEventListener('click', function() {
    // Smooth scroll to the top of the page
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});