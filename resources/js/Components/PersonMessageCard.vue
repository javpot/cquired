<script setup>
defineProps({
    image: String,
    message: String,
});
</script>

<template>
    <div class="flex flex-row rounded-sm w-1/2 mb-4 mt-4">
        <img
            class="w-6 h-6 mr-2 ml-2"
            src="../../assets/pfp-icon.png"
            alt="profile"
        />
        <p class="text-sm bg-gray-300 rounded-lg p-2">{{ message }}</p>
    </div>
</template>
