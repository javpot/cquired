<script setup>
defineProps({
    clientdata: Array,
});
</script>

<template>
    <div class="flex flex-col w-1/2 mt-8">
        <h2 class="text-xl py-4">About</h2>
        <div class="text-center my-4">
            <hr calss="my-2" />
        </div>

        <label for="bio">Bio</label>
        <p id="bio">{{ clientdata.bio }}</p>
    </div>
</template>
