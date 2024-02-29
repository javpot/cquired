<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const status = ref("available");
const form = useForm({
    status: status.value,
});
</script>
<template>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Profile Status</h2>

        <p class="mt-1 text-sm text-gray-600">
            Update your account's profile status.
        </p>
    </header>

    <form
        @submit.prevent="form.patch(route('profile.update'))"
        class="mt-6 space-y-6"
    >
        <InputLabel for="status" value="Status" />

        <div class="flex flex-row">
            <input
                type="radio"
                id="available"
                value="available"
                v-model="status"
            />
            <label for="available">Available</label>

            <input
                type="radio"
                id="unavailable"
                value="unavailable"
                v-model="status"
            />
            <label for="Unavailable">Unavailable</label>
            <InputError class="mt-2" :message="form.errors.status" />
        </div>
        <div class="flex items-center gap-4">
            <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

            <Transition
                enter-active-class="transition ease-in-out"
                enter-from-class="opacity-0"
                leave-active-class="transition ease-in-out"
                leave-to-class="opacity-0"
            >
                <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
                    Saved.
                </p>
            </Transition>
        </div>
    </form>
</template>
