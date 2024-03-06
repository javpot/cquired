<script setup>
defineProps({
    agencydata: Array,
});
</script>
<template>
    <div class="flex flex-col mx-4 my-4 bg-white rounded-lg">
        <h2 class="text-xl border-b-4 flex flex-row w-full mb-2 p-4">About</h2>
        <div class="mx-4">
            <p class="my-2">{{ agencydata.bio }}</p>
        </div>
    </div>
</template>
