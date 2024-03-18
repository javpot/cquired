<script setup>
import { ref } from "vue";
import axios from "axios";
import GoogleButton from "@/Components/GoogleButton.vue";
import { Link } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import { InertiaProgress } from "@inertiajs/progress";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

InertiaProgress.init({
    color: "#29d",
    showSpinner: true,
});

const csrfToken = window.csrf_token;
const formData = ref({
    email: "",
    password: "",
});

const submitForm = async () => {
    if (formData.value.email !== "" && formData.value.password !== "") {
        try {
            formData.value._token = csrfToken;

            const response = await axios.post("/login", formData.value);

            if (response.status == 200) {
                Inertia.visit(route("dashboard"));
            }
        } catch (error) {
            console.error("Form submission error:", error);
        }
    }
};
</script>

<template>
    <GuestLayout title="Login" class="w-screen h-screen flex flex-col">
        <div class="text-center my-4">
            <hr calss="my-2" />
        </div>

        <form
            @submit.prevent="submitForm"
            class="w-full flex flex-col space-y-6"
        >
            <input type="hidden" name="_token" :value="csrfToken" />
            <label for="email">Email</label>
            <input
                v-model="formData.email"
                type="email"
                name="email"
                required
                id="email"
            />
            <label for="mdp">Password</label>
            <input
                v-model="formData.password"
                type="password"
                name="mdp"
                required
                id="mdp"
            />
            <PrimaryButton @click="submitForm">Login</PrimaryButton>
        </form>
        <div class="flex flex-col items-center space-y-6 my-6">
            <Link href="" class="text-blue-300">Forgot your password?</Link>
            <span class="flex flex-row">
                Don't have an account yet ?
                <Link :href="route('register')" class="ml-2 text-blue-300"
                    >Sign up now
                </Link>
            </span>
        </div>
        <div class="flex w-full justify-center items-center">
            <div class="h-px w-full bg-black"></div>
            <h2 class="px-4">OR</h2>
            <div class="h-px w-full bg-black"></div>
        </div>
        <GoogleButton />
    </GuestLayout>
</template>
