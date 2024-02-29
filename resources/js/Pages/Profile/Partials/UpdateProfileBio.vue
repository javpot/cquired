<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";

const user = usePage().props.auth.user;
const category = user.category;
const userData = ref("");

onMounted(async () => {
    if (category === "Client") {
        userData.value = usePage().props.auth.client;
    } else {
        userData.value = usePage().props.auth.agency;
    }
});

const bio = ref(userData.bio);

const form = useForm({
    bio: bio.value,
});
</script>
<template>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Bio</h2>

            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile biography.
            </p>
        </header>

        <form
            v-if="category == 'Client'"
            @submit.prevent="form.patch(route('client-profile.update'))"
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="bio" value="Bio" />

                <textarea
                    name="Bio"
                    id="bio"
                    placeholder="Bio"
                    cols="100"
                    rows="10"
                    v-model="form.bio"
                    required
                    autocomplete="name"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                ></textarea>

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Saved.
                    </p>
                </Transition>
            </div>
        </form>
        <form
            v-else
            @submit.prevent="form.patch(route('agency-profile.update'))"
            class="mt-6 space-y-6"
        >
            <div>
                <InputLabel for="bio" value="Bio" />

                <textarea
                    name="Bio"
                    id="bio"
                    placeholder="Bio"
                    cols="80"
                    rows="10"
                    v-model="form.bio"
                    required
                    autocomplete="name"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                ></textarea>

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="flex items-center gap-4">
                <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="form.recentlySuccessful"
                        class="text-sm text-gray-600"
                    >
                        Saved.
                    </p>
                </Transition>
            </div>
        </form>
    </section>
</template>
