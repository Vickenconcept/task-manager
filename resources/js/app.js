import './bootstrap';

const accessToken = document.querySelector('#access_token');
localStorage.setItem('access_token', accessToken?.value);

