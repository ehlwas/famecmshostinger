
const animationSetup = (container, animationName) => {

    return bodymovin.loadAnimation({
        container,
        renderer: 'svg',
        loop: false,
        autoplay: false,
        path: `/themes/fame-cms/assets/animation-json/${animationName}.json`,
        rendererSettings: {
          preserveAspectRatio: 'none' // <- THIS breaks aspect ratio lock
        }
    })

}

const interObserSetup = (animation) => {
    return new IntersectionObserver(function (entries, observer) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    animation.play();
                }, 800);
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.5
    });
}
  
function handlePlayAnimation() {
    // animation.setSpeed(0.5);
    animation.play();
    // animation.loop = false;
    // animation.autoplay = true;
}

document.addEventListener("DOMContentLoaded", function() {

    const animationOne = document.getElementById("animation1");
    const animationTwo = document.getElementById("animation2");
    const animationThree = document.getElementById("animation3");
    const animationFour = document.getElementById("animation4");
    const animationFive = document.getElementById("animation5");
    const animationSix = document.getElementById("animation6");
    const animationSeven = document.getElementById("animation7");



    if (animationOne) {
        const bodymovinAnimation = animationSetup(animationOne, 'animation-1')
        
        const observer = interObserSetup(bodymovinAnimation)
        
        observer.observe(animationOne);
    }



    if (animationTwo) {
        const bodymovinAnimation = animationSetup(animationTwo, 'animation-2')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationTwo);
    }



    if (animationThree) {
        const bodymovinAnimation = animationSetup(animationThree, 'animation-3')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationThree);
    }



    if (animationFour) {
        const bodymovinAnimation = animationSetup(animationFour, 'animation-4')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationFour);
    }



    if (animationFive) {
        const bodymovinAnimation = animationSetup(animationFive, 'animation-5')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationFive);
    }



    if (animationSix) {
        const bodymovinAnimation = animationSetup(animationSix, 'animation-6')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationSix);
    }



    if (animationSeven) {
        const bodymovinAnimation = animationSetup(animationSeven, 'animation-7')
        
        const observer = interObserSetup(bodymovinAnimation);
        
        observer.observe(animationSeven);
    }
    
})