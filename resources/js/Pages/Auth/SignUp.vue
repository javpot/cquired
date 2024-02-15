<script>
import { Link } from "@inertiajs/vue3";

export default {
    data() {
        return {};
    },
    components: { Link },
};
</script>

<template>
    <div class="container-login">
        <div class="img-holder">
            <img src="../../../assets/SignInImg.png" alt="" srcset="" />
        </div>
        <div class="log-info">
            <img
                src="../../../assets/logo-cquired-single.png"
                alt=""
                srcset=""
            />
            <h1>Creer un compte</h1>
            <div class="google-button">Continue with Google</div>
            <div class="separateur">
                <div class="ligne"></div>
                <h2>Ou</h2>
                <div class="ligne"></div>
            </div>
            <form action="" method="post">
                <label for="name">Full name*</label>
                <input type="text" name="name" id="name" />
                <label for="email">Adresse courriel*</label>
                <input type="email" name="email" id="email" />
                <label for="mdp">Mot de passe*</label>
                <input type="password" name="mdp" id="mdp" />
                <div>
                    <input type="submit" value="Connection" class="submit" />
                </div>
            </form>
            <span>
                Vous avez déja un compte?
                <Link :href="route('login')" class="inscrire">
                    Se connecter</Link
                ></span
            >
        </div>
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
