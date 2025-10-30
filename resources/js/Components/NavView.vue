<script setup>
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    <header>
        <nav>
            <div class="menu-logo">
                <i class="fa-solid fa-bars fa-2x"></i>
                <img src="../../assets/logo.png" alt="" srcset="" />
            </div>

            <img src="../../assets/logo.png" alt="" srcset="" class="logo" />

            <div class="nav-selection">
                <li><Link :href="route('login')">Login</Link></li>
                <li><Link :href="route('register')">Sign up</Link></li>
            </div>
        </nav>
    </header>
</template>

<style scoped>
header {
    height: 15vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
    border-bottom: 1px solid black;
}
img {
    width: 120px;
    margin-left: 5%;
}
nav {
    height: 10vh;
    width: 100vw;
    display: flex;
    justify-content: space-around;
    align-items: center;
    list-style-type: none;
}

.menu-logo {
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.menu-logo > img {
    display: none;
}

.nav-selection {
    display: flex;
    gap: 15px;
}
.nav-selection > li {
    height: 40px;
    width: 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}

.nav-selection > li:nth-child(1),
.nav-selection > li:nth-child(2),
.nav-selection > li:nth-child(3) {
    display: none;
}
.nav-selection > li:nth-child(2) {
    color: #6ec3e7;
    border: 1px solid #6ec3e7;
    border-radius: 30px;
    /*for animation*/
    transition: 0.3s;
}
.nav-selection > li:nth-child(2):hover {
    color: white;
    background-color: #6ec3e7;
}

@media screen and (min-width: 650px) {
    img {
        width: 150px;
        margin-left: 5%;
    }
    nav {
        justify-content: space-between;
        width: 95vw;
    }
    .menu-logo > img {
        display: block;
    }
    .logo {
        display: none;
    }
    .nav-selection > li:nth-child(3) {
        display: flex;
    }
}
@media screen and (min-width: 950px) {
    .menu-logo > i {
        display: none;
    }
    .nav-selection > li:nth-child(1),
    .nav-selection > li:nth-child(2) {
        display: flex;
    }
    .nav-selection > li:nth-child(2) {
        width: 150px;
    }
}
</style>
