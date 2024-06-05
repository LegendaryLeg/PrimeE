const loginForm = document.querySelector('#loginForm')
const signupForm = document.querySelector('#signupForm')
const loginBtn = document.querySelector('#switchBtn')
const signupBtn = document.querySelector('#signupBtn')

loginBtn.addEventListener('click', () => {
    loginForm.style.display = 'flex'
    signupForm.style.display = 'none'
})

signupBtn.addEventListener('click', () => {
    loginForm.style.display = 'none'
    signupForm.style.display = 'flex'
})