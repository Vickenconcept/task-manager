import { ref, reactive, computed } from "vue"
import { http } from "../utils/request";
import { useLocalStorage } from '@vueuse/core';

export const useTodoList = () => {
    const todoList = useLocalStorage('todoList', []);
    const todo = reactive({'title': null});
    const filter = ref('all');

    const getTodoList = async () => {
        todoList.value = (await http.get('todos')).data.data
    }

    const addTodo = async () => {
        if(!todo.title) return 'title is required';

        await http.post('todos', todo);
        todo.title = null;
        getTodoList()
    }

    const completeTodo = async (index, todoId) => {
        await http.put(`todos/${todoId}`, {status: 'completed'});
        todoList.value[index].status = 'completed';

        getTodoList()
    }

    const clearCompleteTodo = async () => {
        await http.delete('todos/completed/clear');
        todoList.value = todoList.value.filter(todo => todo.status !== 'completed');
    }

    const deleteTodo = async (todoId) => {
        await http.delete(`todos/${todoId}`);
        todoList.value = todoList.value.filter(todo => todo.id !== todoId);
    }

    const filterTodoList = computed(() => {
        if(filter.value == 'all') return todoList.value;

        return todoList.value.filter(todo => todo.status == filter.value)
    })

    return {
        todo,
        filter,
        addTodo,
        todoList,
        filterTodoList,
        getTodoList,
        deleteTodo,
        completeTodo,
        clearCompleteTodo
    }
}