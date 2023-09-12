<script setup>
import { ref, computed } from 'vue'
import { useSortable } from '@vueuse/integrations/useSortable'
import { useTaskList } from '../composables/task-list';
import TaskItem from './TaskItem.vue'

const {
    task,
    filter,
    addTask,
    editTask,
    taskList,
    filterTaskList,
    getTaskList,
    deleteTask,
    updateTask,
} = useTaskList();

getTaskList()

const el = ref(null)


useSortable(el, taskList);

const errorMessage = computed(() => {
    const message = filter.value !== 'all' ? ` ${filter.value}` : '';
    return `You have no${message} task to do`
});
</script>

<template>
    <div class="flex flex-col justify-center items-center gap-4 p-6 text-lg font-serif">
        <div class="w-[600px] space-y-4">
            <div class="mb-10 space-y-5">
                <div class="grid grid-cols-4">
                    <input type="text" v-model="task.title" class="task-input">
                    <button class="task-btn" @click="addTask">Add</button>
                </div>
            </div>
            <div>
                <template v-if="filterTaskList.length">
                    <table>
                        <thead class="">
                            <tr class="text-sm font-semibold text-left bg-gray-200 divide-x divide-gray-300 text-gray-400 ">
                                <th class="px-4 py-3">Task</th>
                                <th class="px-4 py-3">Priority</th>
                                <th class="px-4 py-3">TimeStamp</th>
                                <th class="px-4 py-3">Action</th>
                            </tr>
                        </thead>

                        <tbody ref="el" class="space-y-4">
                            <TaskItem v-for="(task, index) in filterTaskList" :key="task.id" :task="task"
                                @delete-task="deleteTask(task.id)" @update-task="updateTask(index, task.id)" />

                        </tbody>
                    </table>
                </template>
                <div v-else>
                    <h4 class="text-2xl font-bold">{{ errorMessage }}</h4>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
.task-input {
    @apply block w-full rounded-l-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6 col-span-3 rounded-tr-none;
}

.task-btn {
    @apply flex w-full justify-center rounded-r-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600;
}

.clear-task-btn {
    @apply flex justify-center rounded-md bg-red-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-red-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600;
}
</style>
