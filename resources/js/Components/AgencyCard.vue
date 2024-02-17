<script setup>
import Bookmark from "./Bookmark.vue";

defineProps({
    title: String,
    image: String,
    description: String,
});
</script>

<template>
    <div class="h-52 w-60">
        <img
            src="../../assets/image9.png"
            alt="banner"
            class="w-60 z-10"
        />
        <p class="text-lg font-medium">{{ title }}</p>
        <p class="w-full text-sm">
            {{ description }}
        </p>
        <Bookmark class="" />
    </div>
</template>
