<script setup>
import { useTodoList } from './todo-list';

const { todoList, getTodoList } = useTodoList()
getTodoList()
</script>

<template>
    <div>
        <ul>
            <li v-for="todo in todoList" :key="todo.id">{{ todo.title }}</li>
        </ul>
    </div>
</template>
