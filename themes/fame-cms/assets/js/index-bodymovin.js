var animation = bodymovin.loadAnimation({
    container: document.getElementById('animation1'),
    renderer: 'svg',
    loop: false,
    autoplay: true,
    path: '/themes/fame-cms/assets/animation-json/animation-1.json',
    rendererSettings: {
      preserveAspectRatio: 'none' // <- THIS breaks aspect ratio lock
    }
})
  
function handlePlayAnimation() {
    // animation.setSpeed(0.5);
    animation.play();
    // animation.loop = false;
    // animation.autoplay = true;
}