const images = document.querySelectorAll('#img-moving-vertical');

new SimpleParallax(images, {
    scale: 1.3,
    delay: .3,
    transition: 'cubic-bezier(0,0,0,0.6)'
});