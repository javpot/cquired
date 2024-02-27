<script setup>
import { Link } from "@inertiajs/vue3";
import Bookmark from "./Bookmark.vue";

defineProps({
    id: Number,
    title: String,
    image: String,
    description: String,
});
</script>

<template>
    <div class="h-52 w-60 flex flex-col my-4">
        <Link :href="route('agency-profile')">
            <img src="../../assets/image9.png" alt="banner" class="w-60 z-10" />
        </Link>
        <Bookmark />
        <p class="text-lg font-medium">{{ title }}</p>
        <p class="w-full text-sm">
            {{ description }}
        </p>
    </div>
</template>
