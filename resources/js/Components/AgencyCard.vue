<script setup>
import Bookmark from "./Bookmark.vue";
import { Link } from "@inertiajs/vue3";
defineProps({
    title: String,
    image: String,
    description: String,
});
</script>

<template>
    <div class="h-52 w-60 flex">
        <Link :href="route('agency-profile')">
            <img src="../../assets/image9.png" alt="banner" class="w-60 z-10" />
            <div class="h-1">
            <img src="../../assets/icons-save.png" class="relative bottom-130  left-190 w-10"/>
            </div>
            <p class="text-lg font-medium">{{ title }}</p>
            <p class="w-full text-sm">
                {{ description }}
            </p>
            <!-- <Bookmark class="" /> -->
        </Link>
    </div>
</template>
<style>
.bottom-130{
    bottom:130px
}
.left-190{
    left:190px
}
</style>
