const burgerBtn = document.querySelector('#burgerBtn');
const navBurger = document.querySelector('#navBurger');

burgerBtn.addEventListener('click', (e) => {
    navBurger.classList.toggle('active')
})

console.log(navBurger.getBoundingClientRect());

window.addEventListener('scroll', () => {
    if (window.scrollY > 1) {
        navBurger.classList.remove('active')
    }
})