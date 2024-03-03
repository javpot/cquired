<script setup>
import { ref, computed } from "vue";
import { defineProps } from "vue";

// Définissez `clients` comme une prop. Pas besoin d'utiliser `export default` ici.
const props = defineProps({
    clients: Array,
});

const currentPage = ref(1);
const clientsPerPage = ref(10);

// Calcul de la pagination des clients
const paginatedClients = computed(() => {
    const start = (currentPage.value - 1) * clientsPerPage.value;
    const end = start + clientsPerPage.value;
    return props.clients.slice(start, end);
});

const totalPages = computed(() => {
    return Math.ceil(props.clients.length / clientsPerPage.value);
});

// Fonction pour changer la page
function changePage(page) {
    currentPage.value = page;
}
</script>

<template>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right">
            <thead class="text-xs text-gray-700 uppercase bg-white">
                <tr class="border-2 border-gray-50">
                    <th scope="col" class="px-6 py-3 border-2 border-gray-50">
                        Contact Name
                    </th>
                    <th scope="col" class="px-6 py-3 border-2 border-gray-50">
                        Domain
                    </th>
                    <th scope="col" class="px-6 py-3 border-2 border-gray-50">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 border-2 border-gray-50">
                        Location
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr
                    v-for="(client, index) in paginatedClients"
                    :key="index"
                    class="bg-white border-2 border-gray-50"
                >
                    <th
                        scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap"
                    >
                        {{ client.name }}
                    </th>
                    <td class="px-6 py-4 border-2 border-gray-50">
                        {{ client.domain }}
                    </td>
                    <td class="px-6 py-4 border-2 border-gray-50">
                        {{ client.email }}
                    </td>
                    <td class="px-6 py-4 border-2 border-gray-50">
                        {{ client.location }}
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="flex flex-row space-x-4 justify-center">
            <button
                class="flex flex-row bottom-0 justify-center space-x-4 text-myBlue text-2xl my-4"
                v-for="page in totalPages"
                :key="page"
                @click="changePage(page)"
                :class="{
                    ' text-cyan-400': page === currentPage,
                }"
            >
                {{ page }}
            </button>
        </div>
    </div>
</template>
