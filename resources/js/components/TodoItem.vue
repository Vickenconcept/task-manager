<script setup lang="ts">
import { ref, computed } from 'vue';

const props = defineProps({
    todo: Object
})

const completed = computed(() => props.todo.status == 'completed');
const showControlButtons = ref(false);
</script>

<template>
    <div @mouseenter="showControlButtons = true" @mouseleave="showControlButtons = false"
        class="bg-gray-50 shadow flex-grow text-black border-l-8  rounded-md px-3 py-2 w-full relative"
        :class="completed ? 'border-green-500' : 'border-yellow-500'">
        <span :class="{ 'line-through': completed }">{{ todo.title }}</span>

        <div class="text-gray-500 font-thin text-sm pt-1 space-x-2">
            <span :class="completed ? 'text-green-500' : 'text-yellow-500'">{{ todo.status }}</span>
            <span>{{ todo.updated_at }}</span>
        </div>
        <Transition name="fade">
            <div v-show="showControlButtons" class="absolute right-3 bottom-3 flex gap-2">
                <div v-show="!completed" class="primary " @click="$emit('completeTodo')">
                    <i class='bx bx-check'></i>
                </div>
                <div class="danger" @click="$emit('deleteTodo')">
                    <i class='bx bx-trash'></i>
                </div>
            </div>
        </Transition>
    </div>
</template>


<style scoped>
.control-btn {
    @apply w-8 h-8 cursor-pointer rounded-full bg-gray-300 text-gray-700 shadow-md flex items-center justify-center;
}

.primary {
    @apply control-btn hover:bg-green-500 hover:text-gray-50;
}

.danger {
    @apply control-btn hover:bg-red-500 hover:text-gray-50;
}

.fade-enter-active,
.fade-leave-active {
    transition: transform 0.5s ease;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.5s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>