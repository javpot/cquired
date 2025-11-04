<script setup>
import { Link } from "@inertiajs/vue3";
import Bookmark from "./Bookmark.vue";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    agencydata: Array,
});
</script>

<template>
    <div
        class="h-48 w-60 flex flex-col my-4 mx-4 rounded-lg shadow-md hover:scale-110 hover:border-2 hover:border-gray-200 transition-transform duration-300 ease-in-out"
    >
        <img
            :src="agencydata.banner"
            alt="banner"
            class="max-w-60 max-h-32 z-10 rounded-tl-lg rounded-tr-lg"
            @click="Inertia.visit(`/agency-profile/${agencydata.id}`)"
        />
        <!-- <Bookmark class="" /> -->
        <p class="text-lg font-medium ml-1">{{ agencydata.name }}</p>
        <p class="text-sm truncate ml-1">
            {{ agencydata.specialty }}
        </p>
    </div>
</template>
