const loginBtn = document.querySelector('#login');
const registerBtn = document.querySelector('#register');
const loginForm = document.querySelector('#loginForm')
const registerForm = document.querySelector('#registerForm')

registerBtn.addEventListener('click', () => {
    registerForm.style.display = 'flex';
    loginForm.style.display = 'none'
})

loginBtn.addEventListener('click', () => {
    loginForm.style.display = 'flex';
    registerForm.style.display = 'none'
})