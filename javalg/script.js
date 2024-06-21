/*==== navbar toggle ===*/
let navBar = document.querySelector('.navbarlinks');
let menuBar = document.querySelector('#menuBtn');

menuBar.onclick = () => {
    navBar.classList.toggle('active');
}


/* login/register */
const wrapper = document.querySelector('.wrapper');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');



registerLink.addEventListener('click', ()=> {
  wrapper.classList.add('active');
});

loginLink.addEventListener('click', ()=> {
  wrapper.classList.remove('active');
});

document.getElementById('loginForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);
  const response = await fetch('/login', {
      method: 'POST',
      body: formData
  });
  if (response.ok) {
      alert(await response.text());
  } else {
      alert('Login failed');
  }
});

document.getElementById('registerForm').addEventListener('submit', async (e) => {
  e.preventDefault();
  const formData = new FormData(e.target);
  const response = await fetch('/register', {
      method: 'POST',
      body: formData
  });
  if (response.ok) {
      alert(await response.text());
  } else {
      alert('Registration failed');
  }
});
