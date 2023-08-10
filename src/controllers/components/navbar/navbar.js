document.addEventListener('DOMContentLoaded', function() {
    const expandButton = document.getElementById('right-section-button');
    const linksContainer = document.getElementById('right-section-links');

    expandButton.addEventListener('click', function() {
        linksContainer.classList.toggle('active');
    });
});