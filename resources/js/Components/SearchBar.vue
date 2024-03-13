<script setup>
import { defineProps, ref } from "vue";

const props = defineProps({
    submit: Function,
    placeholder: String,
});

const searchValue = ref("");
</script>
<template>
    <div class="input-container flex flex-row relative items-center">
        <input
            type="text"
            v-model="searchValue"
            class="w-full h-9 pl-2 pr-8 border rounded-md relative"
            :placeholder="props.placeholder || ''"
            :on-change="props.submit(searchValue)"
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
