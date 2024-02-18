<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";

defineProps({});
</script>

<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Picture</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile picture.
            </p>
        </header>

        <img src="../../../../assets/pfp-icon.png" alt="" />
        <PrimaryButton>Choose</PrimaryButton>

        <div class="flex items-center gap-4">
            <PrimaryButton>Save</PrimaryButton>
        </div>
    </section>
</template>
