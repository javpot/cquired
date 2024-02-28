<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import DomainListDropdown from "@/Components/DomainListDropdown.vue";
import { useForm, usePage } from "@inertiajs/vue3";

const user = usePage().props.auth.user;

const form = useForm({
    domain: user.domain,
});
</script>
<template>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Profile Domain</h2>

        <p class="mt-1 text-sm text-gray-600">
            Update your account's profile domain.
        </p>
    </header>

    <form
        @submit.prevent="form.patch(route('profile.update'))"
        class="mt-6 space-y-6"
    >
        <div>
            <InputLabel for="domain" value="Domain" />

            <DomainListDropdown />

            <InputError class="mt-2" :message="form.errors.domain" />
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
