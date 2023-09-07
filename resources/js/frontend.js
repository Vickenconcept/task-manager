import { createApp } from 'vue'
import 'boxicons'

import TodoList from './components/TodoList.vue';

const app = createApp({});

app.component('todo-list', TodoList);

app.mount('#app');
