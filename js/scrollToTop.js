$("#scrollToTopArrowId").on("click", function(){
    window.scrollTo({
        top: 0,
		left: 0,
		behaviour: "smooth"
	});
});

// Function to show/hide the button
function toggleScrollButton() {
    // If the scroll position is greater than 0, show the button
    var scrollToTopBtn = document.getElementById('scrollToTopArrowId');
    if (window.scrollY > 0) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
}

// Scroll event listener
window.addEventListener('scroll', toggleScrollButton);