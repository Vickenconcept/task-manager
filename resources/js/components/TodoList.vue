<script setup>
import { ref, computed } from 'vue'
import { useSortable } from '@vueuse/integrations/useSortable'
import { useTodoList } from '../composables/todo-list';
import TodoItem from './TodoItem.vue'

const {
    todo,
    filter,
    addTodo,
    todoList,
    filterTodoList,
    getTodoList,
    deleteTodo,
    completeTodo,
    clearCompleteTodo
} = useTodoList();

getTodoList()

const el = ref(null)

useSortable(el, todoList);

const errorMessage = computed(() => {
    const message = filter.value !== 'all' ? ` ${filter.value}` : '';
    return `You have no${message} task to do`
});
</script>

<template>
    <div class="flex flex-col justify-center items-center gap-4 p-6 text-lg font-serif">
        <div class="w-[600px] space-y-4">
            <div class="my-10">Note: drag the todo item to reorder</div>
            <div class="mb-10 space-y-5">
                <div class="grid grid-cols-4">
                    <input type="text" v-model="todo.title" class="todo-input">
                    <button class="todo-btn" @click="addTodo">Add</button>
                </div>

                <div class="flex justify-between">
                    <div>
                        <select v-model="filter"
                            class="w-[300px] py-3 px-4 pr-9 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:text-gray-400">
                            <option selected>Filter Todo List</option>
                            <option value="all">ALL</option>
                            <option value="active">ACTIVE</option>
                            <option value="completed">COMPLETED</option>
                        </select>
                    </div>
                    <button class="clear-todo-btn" @click="clearCompleteTodo">Clear All Completed</button>
                </div>
            </div>
            <div ref="el" class="space-y-4">
                <template v-if="filterTodoList.length">
                    <TodoItem v-for="(todo, index) in filterTodoList" :key="todo.id" :todo="todo"
                        @delete-todo="deleteTodo(todo.id)" @complete-todo="completeTodo(index, todo.id)" />
                </template>
                <div v-else>
                    <h4 class="text-2xl font-bold">{{ errorMessage }}</h4>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.todo-input {
    @apply block w-full rounded-l-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 col-span-3 rounded-tr-none;
}

.todo-btn {
    @apply flex w-full justify-center rounded-r-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600;
}

.clear-todo-btn {
    @apply flex justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600;
}
</style>
