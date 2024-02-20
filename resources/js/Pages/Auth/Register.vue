<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import GoogleButtonVue from "@/Components/GoogleButton.vue";

const form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <div class="h-screen w-screen flex items-center justify-center">
        <div
            class="hidden lg:flex w-1/2 h-full flex-col items-center justify-around bg-blue-300 p-4"
        >
            <img
                src="../../../assets/SignInImg.png"
                alt=""
                class="h-3/5 w-4/5"
            />
        </div>

        <GuestLayout
            class="flex flex-col items-center justify-center gap-2.5 w-full lg:w-1/3 h-9/10 lg:h-9/10 mx-auto my-0"
        >
            <Head title="Register" />
            <form
                @submit.prevent="submit"
                class="flex flex-col items-center justify-center w-full gap-3"
            >
                <div class="flex flex-col items-center w-full">
                    <InputLabel for="name" value="Name" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="flex flex-col items-center w-full">
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
                <div class="flex flex-col items-center w-full">
                    <InputLabel for="password" value="Password" />
                    <TextInput
                        id="password"
                        type="password"
                        class="mt-1 block w-full"
                        v-model="form.password"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>
                <div class="flex flex-col items-center w-full">
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
                        autocomplete="new-password"
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
                >
                    Continuer
                </PrimaryButton>
            </form>
            <span class="flex justify-center items-center mt-7 mb-7 text-sm">
                Vous avez déja un compte?
                <Link :href="route('login')" class="text-blue-300 ml-2">
                    Se connecter
                </Link>
            </span>
            <div class="flex w-full justify-center items-center">
                <div class="h-px w-full bg-black"></div>
                <h2 class="px-4">Ou</h2>
                <div class="h-px w-full bg-black"></div>
            </div>
            <GoogleButtonVue />
        </GuestLayout>
    </div>
</template>
