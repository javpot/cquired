<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

defineProps({
    title: String,
});
</script>

<template>
    <div
        class="w-full h-full flex flex-col sm:justify-center items-center pt-6 sm:pt-0"
    >
        <div>
            <ApplicationLogo class="w-20 h-16 fill-current text-gray-500" />
            <p class="text-center">{{ title }}</p>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>

<style>
h1 {
    font-size: 1.5em;
    font-weight: 600;
}
</style>
