const burgerBtn = document.querySelector('#burgerBtn');
const navBurger = document.querySelector('#navBurger');

burgerBtn.addEventListener('click', () => {
    navBurger.classList.toggle('active')
})