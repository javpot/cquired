<script setup>
import { ref } from "vue";
import axios from "axios";
import GoogleButton from "@/Components/GoogleButton.vue";
import { Link } from "@inertiajs/vue3";

const csrfToken = window.csrf_token;
const formData = ref({
    email: "",
    password: "",
});

const submitForm = async () => {
    try {
        formData.value._token = csrfToken;

        const response = await axios.post("/login", formData.value);

        if (response.status == 200) {
            route({ name: "dashboard" });
        }
    } catch (error) {
        console.error("Form submission error:", error);
    }
};
</script>
<template>
    <div class="container-login">
        <div class="log-info">
            <img
                src="../../../assets/logo-cquired-single.png"
                alt=""
                srcset=""
            />
            <h1>Connection</h1>
            <div class="text-center my-4">
                <hr calss="my-2" />
            </div>

            <form @submit.prevent="submitForm" class="form">
                <input type="hidden" name="_token" :value="csrfToken" />
                <label for="email">Adresse courriel*</label>
                <input
                    v-model="formData.email"
                    type="email"
                    name="email"
                    id="email"
                />
                <label for="mdp">Mot de passe*</label>
                <input
                    v-model="formData.password"
                    type="password"
                    name="mdp"
                    id="mdp"
                />
                <div>
                    <input type="submit" value="Connection" class="submit" />
                </div>
            </form>
            <span><a href="">Mot de passe oublié?</a></span>
            <span>
                Vous n'avez pas de compte ?
                <Link :href="route('register')" class="inscrire"
                    >S'inscrire</Link
                ></span
            >
            <div class="separateur">
                <div class="ligne"></div>
                <h2>Ou</h2>
                <div class="ligne"></div>
            </div>
            <GoogleButton />
        </div>
    </div>
</template>

<style scoped>
.container-login {
    height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
img {
    height: 50px;
    width: 60px;
}
.log-info {
    height: 100px;
    width: 120px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 15px;
}
h1 {
    font-size: 1.5em;
    font-weight: 600;
}

.google-button {
    height: 35px;
    width: 100%;
    background-color: #6ec3e7;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
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
    margin: 5px;
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
}
.inscrire {
    color: #6ec3e7;
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
</style>
