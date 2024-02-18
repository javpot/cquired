<template>
    <div class="input-container relative">
        <input
            type="text"
            class="w-full h-9 pl-2 pr-8 border rounded-md relative"
        />
        <img
            src="../../assets/loupe2.png"
            class="logo absolute right-2 top-1/2 transform -translate-y-1/2"
        />
    </div>
</template>

<style scoped>
.input-container input {
    padding-right: 2.5rem; /* Espace pour le logo */
}

.logo {
    width: 24px; /* Taille de l'image de logo */
    height: 24px; /* Taille de l'image de logo */
    cursor: pointer; /* Change le curseur en pointeur */
}
</style>
