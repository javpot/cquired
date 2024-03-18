<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import GoogleButtonVue from "@/Components/GoogleButton.vue";
import { ref } from "vue";

const form = useForm({
    name: "",
    email: "",
    password: null,
    password_confirmation: "",
});

const { submit } = defineProps(["submit"]);

let response = ref(null);

const handleSubmit = async () => {
    try {
        response.value = await axios.get("/validate-email", {
            params: {
                email: form.email,
            },
        });
        if (isNameValid()) {
            if (isPwdValid()) {
                if (form.password === form.password_confirmation) {
                    if (response.value.data.success) {
                        submit(form, "Credentials");
                    } else {
                        form.errors.email = "Email is already in use";
                    }
                } else {
                    form.errors.password_confirmation =
                        "Passwords do not match";
                }
            }
        }
    } catch (error) {
        console.error("Error submitting form:", error);
    }
};

const isNameValid = () => {
    const regex = /^[A-Za-z\s]+$/; // Regular expression to allow only letters
    if (!regex.test(form.name)) {
        form.errors.name =
            "Special characters are not permitted for this field";
        return false;
    } else {
        form.errors.name = null;
        return true;
    }
};

// Function to check if the password meets the specified criteria
const isPwdValid = () => {
    const regex =
        /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    if (!regex.test(form.password)) {
        form.errors.password =
            "Password must be at least 8 characters, include 1 uppercase letter, 1 number, and 1 special character";
        return false;
    } else {
        form.errors.password = null;
        return true;
    }
};
</script>

<template>
    <div class="h-screen w-screen flex items-center justify-center">
        <div
            class="hidden lg:flex w-1/2 h-full flex-col items-center justify-around bg-blue-300 p-4 min-w-[900px]"
        >
            <img
                src="../../../assets/SignInImg.png"
                alt=""
                class="h-3/5 w-4/5 object-cover object-center"
            />
        </div>

        <GuestLayout
            title="Register"
            class="flex flex-col items-center justify-center gap-2.5 w-full lg:w-1/3 h-9/10 lg:h-9/10 mx-auto my-0 min-w-[300px]"
        >
            <Head title="Register" />
            <div class="text-center my-4">
                <hr calss="my-2" />
            </div>

            <form
                @submit.prevent="handleSubmit"
                class="flex flex-col items-center justify-center w-full gap-3"
            >
                <div class="flex flex-col w-full">
                    <InputLabel for="name" value="Name" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                        @input="isNameValid"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="flex flex-col w-full">
                    <InputLabel for="email" value="Email" />
                    <TextInput
                        id="email"
                        type="email"
                        class="mt-1 block w-full"
                        v-model="form.email"
                        required
                        autocomplete="username"
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>
                <div class="flex flex-col w-full">
                    <InputLabel for="password" value="Password" />
                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="flex flex-col w-full">
                    <InputLabel
                        for="password_confirmation"
                        value="Confirm Password"
                    />
                    <TextInput
                        id="password_confirmation"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password_confirmation"
                        required
                        @input="isPwdValid"
                    />
                    <InputError
                        class="mt-2"
                        :message="form.errors.password_confirmation"
                    />
                </div>
                <PrimaryButton
                    class="h-9 w-1/2 bg-blue-300 rounded-lg mt-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                    type="submit"
                >
                    > Continue
                </PrimaryButton>
            </form>
            <span class="flex justify-center items-center mt-7 mb-7">
                Already have an account?
                <Link :href="route('login')" class="text-blue-300 ml-2">
                    Login
                </Link>
            </span>
            <div class="flex w-full justify-center items-center">
                <div class="h-px w-full bg-black"></div>
                <h2 class="px-4">OR</h2>
                <div class="h-px w-full bg-black"></div>
            </div>
            <GoogleButtonVue />
        </GuestLayout>
    </div>
</template>
