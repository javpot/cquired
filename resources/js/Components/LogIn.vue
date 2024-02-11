<script>
export default {
    data() {
        return {};
    },
};
</script>
<template>
    <div class="container-login">
        <div class="log-info">
            <img src="../../assets/logo-cquired-single.png" alt="" srcset="" />
            <h1>Connection</h1>
            <div class="text-center my-4">
                <hr calss="my-2" />
                <a :href="route('google-auth')" class="google-auth-button">
                    <span class="inline-flex items-center">
                        <img
                            src="../../assets/google.svg"
                            alt="Google Icon"
                            class="w-5 h-5 mr-2"
                        />
                        Continue with Google
                    </span>
                </a>
            </div>
            <div class="separateur">
                <div class="ligne"></div>
                <h2>Ou</h2>
                <div class="ligne"></div>
            </div>
            <form action="" method="post">
                <label for="email">Adresse courriel*</label>
                <input type="email" name="email" id="email" />
                <label for="mdp">Mot de passe*</label>
                <input type="password" name="mdp" id="mdp" />
                <div>
                    <input type="submit" value="Connection" class="submit" />
                </div>
            </form>
            <span><a href="">Mot de passe oublié?</a></span>
            <span>
                Vous n'avez pas de compte ?<a href="" class="inscrire"
                    >S'inscrire</a
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
