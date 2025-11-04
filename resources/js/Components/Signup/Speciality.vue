<template>
    <div
        class="flex flex-col items-center justify-center min-h-screen bg-gray-50 px-4"
    >
        <div
            class="w-full max-w-md bg-white shadow-lg rounded-2xl p-8 space-y-6"
        >
            <h2 class="text-2xl font-semibold text-center text-gray-800">
                Quelle est votre spécialité ?
            </h2>
            <p class="text-sm text-gray-500 text-center">
                Décrivez en une phrase ce qui distingue votre agence.
            </p>

            <form @submit.prevent="submitForm" class="space-y-4">
                <textarea
                    v-model="specialty"
                    placeholder="Exemple : Développement d’applications web sur mesure"
                    class="w-full h-24 p-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-indigo-500 focus:outline-none"
                ></textarea>

                <p v-if="error" class="text-red-500 text-sm">{{ error }}</p>

                <button
                    type="submit"
                    class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-xl font-medium"
                >
                    Continuer
                </button>
            </form>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
    submit: Function,
});

const specialty = ref("");
const error = ref(null);

const submitForm = () => {
    if (!specialty.value.trim()) {
        error.value = "Veuillez indiquer votre spécialité.";
        return;
    }
    error.value = null;
    props.submit(specialty.value, "Speciality");
};
</script>
