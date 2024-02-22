<script setup>
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

defineProps({});
</script>

<template>
    <section class="flex flex-col">
        <header class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900">Profile Picture</h2>
            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile picture.
            </p>
        </header>

        <div class="w-full flex flex-row items-center">
            <img
                class="w-20 h-20 mt-2"
                src="../../../../assets/pfp-icon.png"
                alt=""
            />
            <p class="w-full ml-4 text-sm text-gray-600">
                PNG and JPG under 15mb.
            </p>

            <div class="flex flex-row-reverse gap-4 w-full">
                <PrimaryButton>Choose</PrimaryButton>
                <DangerButton>Remove</DangerButton>
            </div>
        </div>
    </section>
</template>
