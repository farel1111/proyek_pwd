document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('.slider-content');
    const images = slider.querySelectorAll('img');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    let currentIndex = 0;
    const totalImages = images.length;

    // Function to update the slider's position
    function updateSliderPosition() {
        slider.style.transform = `translateX(${-currentIndex * 100}%)`;
        slider.style.transition = 'transform 0.5s ease';
    }

    // Event listener for the next button
    nextButton.addEventListener('click', function () {
        if (currentIndex < totalImages - 1) {
            currentIndex++;
        } else {
            currentIndex = 0; // loop back to the first image
        }
        updateSliderPosition();
    });

    // Event listener for the previous button
    prevButton.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalImages - 1; // loop back to the last image
        }
        updateSliderPosition();
    });

    // Debugging step to ensure buttons are working
    prevButton.addEventListener('click', function () {
        console.log('Prev button clicked');
    });

    nextButton.addEventListener('click', function () {
        console.log('Next button clicked');
    });
});
