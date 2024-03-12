<script setup>
import AgencyCard from "@/Components/AgencyCard.vue";
import { Inertia } from "@inertiajs/inertia";
import { ref, computed } from "vue";
import { defineProps } from "vue";

const currentPage = ref(1);
const agenciesPerPage = ref(15);

const props = defineProps({
    agencies: Array,
});

// Calcul de la pagination des agencies
const paginatedAgencies = computed(() => {
    const start = (currentPage.value - 1) * agenciesPerPage.value;
    const end = start + agenciesPerPage.value;
    return props.agencies.slice(start, end);
});

const totalPages = computed(() => {
    return Math.ceil(props.agencies.length / agenciesPerPage.value);
});

// Fonction pour changer la page
function changePage(page) {
    currentPage.value = page;
}
</script>

<template>
    <div class="my-4 mx-4">
        <div
            class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4"
        >
            <AgencyCard
                v-for="(agency, index) in paginatedAgencies"
                :key="index"
                :agencydata="agency"
                @click="Inertia.visit(`/agency-profile/${agency.id}`)"
                class="mb-4"
            />
        </div>
    </div>
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
</template>
