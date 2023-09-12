<script setup lang="ts">
import { ref, computed } from 'vue';

const props = defineProps({
    task: Object,
    selectedPriority: String
})
const isOpen = ref(false);

const completed = computed(() => props.task.status == 'completed');
const showControlButtons = ref(false);

</script>

<template>
    <tr class="py-10 font-medium divide-x group hover:bg-gray-50  relative">
        <td class="flex-row px-2 py-2 items-center">
            <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-8 h-8 md:h-5 md:w-5 mr-2 text-green-500  group-hover:text-green-600 " viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>
                <div class="flex text-sm group-hover:text-green-500  ">
                    {{ task.title }}</div>
            </div>
        </td>

        <td class="px-4 py-2 items-center">
            <button class="px-2 py-2 bg-red-100  rounded text-gray-500  text-xs font-medium ">
                {{ task.priority }}
            </button>
        </td>
        <td class="flex-row px-2 py-2 items-center text-xs">
            {{ task.updated_at }}
        </td>

        <td class="px-4 py-2">
            <div class="flex lg:flex-row lg:space-x-2 md:text-left text-center items-center space-y-2 lg:space-y-0">
                <button @click=" isOpen = true"
                    class="items-center px-2 py-2 text-white bg-green-500 rounded-md hover:bg-green-600  focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="h-3 w-3">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>

                </button>
                <button @click="$emit('deleteTask')"
                    class="items-center px-2 py-2 text-white bg-red-500 rounded-md hover:bg-red-600  focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        </td>
        <div class="h-screen w-screen bg-gray-400 bg-opacity-20 fixed top-0 left-0 items-center justify-center flex"
            style="z-index: 1000;" v-if="isOpen">
            <div
                class="bg-white w-[50%] shadow-sm border rounded overflow-auto h-[50%] my-auto pb-6 transition-all relative duration-700">
                <div class="p-5" >
                    <button @click="isOpen = false">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <input type="text" v-model="task.title" class="task-input my-5">
                    <div>
                        <select v-model="task.priority"
                            class="w-full py-3 px-4 pr-9 block my-5 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:text-gray-400">
                            <option selected>Filter Task List</option>
                            <option value="high">HIGH</option>
                            <option value="medium">MEDIUM</option>
                            <option value="low">LOW</option>
                        </select>
                        <button class="task-btn" @click="$emit('updateTask'); isOpen = false" >Add </button>
                    </div>
                </div>
            </div>
        </div>
    </tr>
</template>


<style scoped></style>