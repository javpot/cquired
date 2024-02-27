<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
defineProps({
    title: String,
    price: Number,
    description: String,
    linkstripe: String,
    onclick: Function,
    features: Array,
});
</script>

<template>
    <div
        class="h-full w-1/5 bg-myBlue rounded-lg shadow-md flex justify-center items-center p-2"
    >
        <div
            class="h-full w-full flex flex-col rounded-lg justify-between p-10 bg-myBlue"
        >
            <h2 class="text-2xl font-bold">{{ title }}</h2>
            <p class="text-white">
                <span class="text-3xl text-black">$</span
                ><span class="text-3xl text-black">{{ price }}</span> / Month
            </p>
            <p class="text-white text-lg">{{ description }}</p>
            <p class="text-white text-lg">{{ title }} features:</p>
            <ul>
                <li v-for="item in features">&#10003; {{ item }}</li>
            </ul>
            <a :href="linkstripe" class="self-center"
                ><PrimaryButton @click="onclick">Select</PrimaryButton></a
            >
        </div>
    </div>
</template>
