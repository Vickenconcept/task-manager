import './bootstrap';

const accessToken = document.querySelector('#access_token');
localStorage.setItem('access_token', accessToken.value);

console.log(import.meta.env.VITE_BASE_URL);
import { createApp } from 'vue'
import TodoList from './components/TodoList.vue';

const app = createApp({});

app.component('todo-list', TodoList);

app.mount('#app');



