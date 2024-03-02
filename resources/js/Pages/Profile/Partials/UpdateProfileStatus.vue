<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";
import { onMounted } from "vue";

const client = usePage().props.auth.client;
const status = ref("");
const form = useForm({
    status : status.value,
})

onMounted(() => {
    status.value = client.status;

    let availableRadio = document.getElementById('available');
    let unavailableRadio = document.getElementById('unavailable');

    if (status.value === 'available') {
        availableRadio.checked = true;
    } else {
        unavailableRadio.checked = true;
    }
});

const submit = async () => {
    if(status) {

        try {
            await axios.post("/client-profile/status", form);
        } catch (error) {
            console.error("Error uploading image:", error);
        }
    }
}

</script>
<template>
    <header>
        <h2 class="text-lg font-medium text-gray-900">Profile Status</h2>

        <p class="mt-1 text-sm text-gray-600">
            Update your account's profile status.
        </p>
    </header>

    <form
        @submit.prevent="submit"
        class="mt-6 space-y-6"
    >
        <InputLabel for="status" value="Status" />
        <div class="flex flex-row items-center space-x-6">
            <span class="flex flex-row items-center">            
                <input
                type="radio"
                id="available"
                value="available"
                name="status"
                v-model="form.status"
            />
            <label class="ml-2" for="available">Available</label>
            </span>
            <span class="flex flex-row items-center">
                <input
                    type="radio"
                    id="unavailable"
                    value="unavailable"
                    name="status"
                    v-model="form.status"
                                />
                <label class="ml-2" for="unavailable">Unavailable</label>
            </span>
            <InputError class="mt-2" :message="form.errors.status" />
        </div>
        <div class="flex items-center gap-4">
            <PrimaryButton type="submit" :disabled="form.processing">Save</PrimaryButton>

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
