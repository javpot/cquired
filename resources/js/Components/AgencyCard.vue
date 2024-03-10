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
        class="h-48 w-60 flex flex-col my-4 mx-4 rounded-lg hover:scale-110 hover:border-2 hover:border-gray-200 transition-transform duration-300 ease-in-out"
    >
        <img
            :src="agencydata.banner"
            alt="banner"
            class="w-60 z-10"
            @click="Inertia.visit(`/agency-profile/${agencydata.id}`)"
        />
        <Bookmark class="" />
        <p class="text-lg font-medium ml-1">{{ agencydata.name }}</p>
        <p class="w-full text-sm ml-1">
            {{ agencydata.bio }}
        </p>
    </div>
</template>
