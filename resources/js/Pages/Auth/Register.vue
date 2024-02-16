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
    <div class="container-login">
        <div class="img-holder">
            <img src="../../../assets/SignInImg.png" alt="" srcset="" />
        </div>

        <GuestLayout class="log-info">
            <Head title="Register" />
            <form @submit.prevent="submit" class="form">
                <div class="formItem">
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
                <div class="formItem">
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
                <div class="formItem">
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
                <div class="formItem">
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
                    class="submit"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Continuer
                </PrimaryButton>
            </form>
            <span class="flex justify-center items-center mt-7 mb-7 text-sm">
                Vous avez déja un compte?
                <Link :href="route('login')" class="inscrire">
                    Se connecter</Link
                ></span
            >

            <div class="separateur">
                <div class="ligne"></div>
                <h2>Ou</h2>
                <div class="ligne"></div>
            </div>

            <GoogleButtonVue />
        </GuestLayout>
    </div>
</template>

<style scoped>
.container-login {
    height: 100vh;
    width: 100vw;
    display: flex;

    align-items: center;
    justify-content: center;
}
img {
    height: 50px;
    width: 60px;
}
.img-holder > img {
    height: 60%;
    width: 70%;
}

.log-info {
    height: 90%;
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.form {
    display: flex;
    flex-direction: column; /* Stack items vertically */
    align-items: center; /* Center items horizontally */
    justify-content: center; /* Center items vertically */
}

.formItem {
    flex-direction: column;
    margin-top: 4px;
    align-items: flex-start;
}
.img-holder {
    height: 100%;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    background-color: #6ec3e7;
    align-items: center;
    gap: 10px;
    display: none;
}
h1 {
    font-size: 2em;
    font-weight: 600;
}

.separateur {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
}
.ligne {
    height: 2px;
    width: 100%;
    background-color: black;
}
form {
    width: 100%;
    gap: 15px;
    display: flex;

    flex-direction: column;
    justify-content: center;
}
form > div {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.submit {
    height: 35px;
    width: 50%;
    background-color: #6ec3e7;
    border-radius: 10px;
    margin-top: 15px;
}
.inscrire {
    color: #6ec3e7;
    margin-left: 10px;
}
@media screen and (min-width: 650px) {
    .log-info {
        height: 90%;
        width: 40%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 15px;
    }
}
@media screen and (min-width: 1000px) {
    .container-login {
        height: 100vh;
        width: 100vw;
        display: flex;

        align-items: center;
        justify-content: unset;
    }
    .log-info {
        height: 90%;
        width: 30%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-items: center;
        gap: 15px;
        margin-left: 10%;
    }
    .img-holder {
        display: flex;
    }
}
</style>
