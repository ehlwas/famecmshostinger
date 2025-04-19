const video = document.getElementById('foundersVideo');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      video.play();
    } else {
      video.pause();
    }
  });
}, {
  threshold: 0.5 // Adjust how much of the video must be visible
});

observer.observe(video);