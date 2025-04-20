window.addEventListener('DOMContentLoaded', () => {

    const imageSlides = document.querySelectorAll('#imageSlideItem');
    let previewImg = document.getElementById('previewImg');

    const handleSwipeImg = (e) => {
        previewImg.src = e.target.src
    }
    
    
    imageSlides.forEach(ele => {

        ele.addEventListener('click', handleSwipeImg);

    })

})