<script setup>
defineProps({
    image: String,
    name: String,
    lastMessage: String,
    date: Date,
});
</script>

<template>
    <div
        class="flex rounded-sm hover:bg-gray-200 transition p-4 cursor-pointer"
    >
        <img
            class="w-12 h-12 mr-2"
            src="../../assets/pfp-icon.png"
            alt="profile"
        />
        <div class="flex flex-col">
            <h2 class="text-lg">Zafer Acar</h2>
            <h3 class="text-xs">you: allo cmmt ca va. -2w</h3>
        </div>
    </div>
</template>
