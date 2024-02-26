<script setup>
defineProps({
    title: String,
});
</script>
<template>
    <button
        class="h-12 w-auto px-2 bg-white text-gray-400 border-solid border-2 border-gray-400 rounded-xl transition duration-150 ease-out hover:text-sky-400 hover:border-sky-400"
    >
        {{ title }}
    </button>
</template>
