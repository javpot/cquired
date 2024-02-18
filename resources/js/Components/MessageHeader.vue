<script setup>
defineProps({
    image: String,
    name: String,
});
</script>

<template>
    <div class="flex flex-row w-full h-20 items-center rounded-sm border-b-2">
        <img
            class="w-12 h-12 mr-2 ml-4"
            src="../../assets/pfp-icon.png"
            alt="profile"
        />
        <h2 class="text-2xl ml-2">Zafer Acar</h2>
    </div>
</template>
