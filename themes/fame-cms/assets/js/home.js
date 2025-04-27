// const video = document.getElementById('foundersVideo');

// const observer = new IntersectionObserver(entries => {
//   entries.forEach(entry => {
//     if (entry.isIntersecting) {
//       video.play();
//     } else {
//       video.pause();
//     }
//   });
// }, {
//   threshold: 0.5 // Adjust how much of the video must be visible
// });

// observer.observe(video);


document.addEventListener('DOMContentLoaded', () => {
    const headerContainer = document.querySelector('#bannerContainer');
    const slides = headerContainer.querySelectorAll('.slider-w');
    const slideCount = slides.length;

    let slideCounter = 0;

    const sliderAnimation = () => {
        slides.forEach(slide => {
            slide.classList.remove('active', 'next', 'prev');
        });

        const nextIndex = (slideCounter + 1) % slideCount;

        slides[slideCounter].classList.add('active');
        slides[nextIndex].classList.add('next');

        // Only add 'prev' if more than 2 slides
        if (slideCount > 2) {
            const prevIndex = (slideCounter - 1 + slideCount) % slideCount;
            slides[prevIndex].classList.add('prev');
        }
    };

    sliderAnimation();

    // setInterval(() => {
    //     slideCounter = (slideCounter + 1) % slideCount;
    //     sliderAnimation();
    // }, 10000);
});