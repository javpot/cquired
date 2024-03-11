<script setup>
defineProps({
    clientdata: Array,
});
</script>

<template>
    <div class="h-1/2 flex flex-col w-1/2 mt-8">
        <h2 class="text-xl py-4">Contact</h2>
        <div class="text-center my-4">
            <hr calss="my-2" />
        </div>

        <label for="email">Email</label>
        <a class="text-cyan-500 mb-12" :href="`mailto:${clientdata.email}`">{{
            clientdata.email
        }}</a>
    </div>
</template>
