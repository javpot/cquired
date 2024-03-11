<script setup>
defineProps({
    agencydata: Array,
});
</script>
<template>
    <div class="h-1/2 flex flex-col mx-4 my-4 bg-white rounded-lg">
        <h2 class="text-xl border-b-4 flex flex-row w-full mb-2 p-4">About</h2>
        <p class="mx-4 my-2 text-left text-wrap">
            {{ agencydata.bio }}
        </p>
    </div>
</template>
