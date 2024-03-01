<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import DeleteUserForm from "./Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";
import { Head } from "@inertiajs/vue3";
import UpdateProfileImage from "./Partials/UpdateProfileImage.vue";
import UpdateProfileBanner from "./Partials/UpdateProfileBanner.vue";
import UpdateProfileDomain from "./Partials/UpdateProfileDomain.vue";
import UpdateProfileStatus from "./Partials/UpdateProfileStatus.vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted, ref } from "vue";
import UpdateProfileBio from "./Partials/UpdateProfileBio.vue";
import AgencyBilling from "./Partials/AgencyBilling.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;
const category = user.category;
let userData = ref([]);

onMounted(() => {
    if (category === "Client") {
        userData.value = usePage().props.auth.client;
    } else {
        userData.value = usePage().props.auth.agency;
    }
});
</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout v-if="category === 'Client'">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileDomain class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileStatus class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileBio class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileImage class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileBanner class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
    <AuthenticatedLayoutAgency v-else>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Profile
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileBio class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileImage class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdateProfileBanner class="max-w-screen" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <AgencyBilling></AgencyBilling>
                </div>

                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </div>
            </div>
        </div>
    </AuthenticatedLayoutAgency>
</template>
