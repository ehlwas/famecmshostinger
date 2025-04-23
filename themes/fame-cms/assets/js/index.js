const mobileNavBtn = document.querySelector('#mobileNavBtn');
const mobileCloseBtn = document.querySelector('#mobileCloseBtn');
const navContainer = document.querySelector('#navContainer');

const body = document.querySelector('body');

mobileNavBtn.addEventListener('click', () => {
  navContainer.classList.add('show');
  body.style.overflow = 'hidden';
});

mobileCloseBtn.addEventListener('click', () => {
  navContainer.classList.remove('show');
  body.style.overflow = '';
});




let lastScrollY = window.scrollY;
const navbar = document.getElementById('headerNavigation');

window.addEventListener('scroll', () => {
  if (window.scrollY > lastScrollY) {
    // Scrolling Down
    navbar.style.top = '-150px';
  } else {
    // Scrolling Up
    navbar.style.top = '0';
  }
  lastScrollY = window.scrollY;
});


const dropdownNav = navContainer.querySelectorAll('.dropdown-nav');

dropdownNav.forEach((element) => {    
    element.addEventListener('click', (ele) => {
        ele.currentTarget.classList.toggle('show');
    });
})
