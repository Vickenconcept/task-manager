import { ref } from "vue"
import { http } from "../utils/request";

export const useTodoList = () => {
    const todoList = ref([]);

    const getTodoList = async () => {
        todoList.value = (await http.get('todos')).data.data
    }

    return {
        todoList,
        getTodoList
    }
}