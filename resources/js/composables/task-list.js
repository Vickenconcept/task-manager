import { ref, reactive, computed } from "vue"
import { http } from "../utils/request";
import { useLocalStorage } from '@vueuse/core';

export const useTaskList = () => {
    const taskList = useLocalStorage('taskList', []);
    const task = reactive({ 'title': null });
    const filter = ref('all');

    const getTaskList = async () => {
        taskList.value = (await http.get('tasks')).data.data
    }

    const addTask = async () => {
        if (!task.title) return 'title is required';

        await http.post('tasks', task);
        task.title = null;
        getTaskList()
    }

    const updateTask = async (index, taskId) => {

        const title = taskList.value[index].title;
        const priority = taskList.value[index].priority;
        await http.put(`tasks/${taskId}`, { title: title, priority: priority });
        taskList.value[index].priority = priority;
        taskList.value[index].title = title;
    }

    const deleteTask = async (taskId) => {
        await http.delete(`tasks/${taskId}`);
        taskList.value = taskList.value.filter(task => task.id !== taskId);
    }

    const filterTaskList = computed(() => {
        if (filter.value == 'all') return taskList.value;

        return taskList.value.filter(task => task.status == filter.value)
    })

    return {
        task,
        filter,
        addTask,
        taskList,
        filterTaskList,
        getTaskList,
        deleteTask,
        updateTask,
    }
}