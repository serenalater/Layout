const navbar = document.getElementById('navbar');
console.log(navbar);

window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
        navbar.classList.add('sticky-navbar');
    } else {
        navbar.classList.remove('sticky-navbar');
    }
});