<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import DomainListDropdown from "@/Components/DomainListDropdown.vue";
import SearchBar from "@/Components/SearchBar.vue";
import { onMounted, ref } from "vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import RowAgency from "@/Components/RowAgency.vue";

let agencies = ref([]);
let shownAgencies = ref([]);

async function getAgencies() {
    try {
        const response = await axios.get("/agencies");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        // console.log(response.data.Agencies);
        agencies.value = response.data.Agencies;
        shownAgencies.value = response.data.Agencies;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}

function submitDomain(domain) {
    if (domain != undefined) {
        shownAgencies.value = agencies.value;

        shownAgencies.value = agencies.value.filter((agency) => {
            return agency.domain === domain;
        });
    }
}

onMounted(async () => {
    await getAgencies();
});
</script>
<template>
    <AuthenticatedLayout class="mb-4">
        <template #header>
            <div class="w-full h-8 flex flex-row justify-between items-center">
                <DomainListDropdown :submit="submitDomain" />
                <span class="flex flex-row">
                    <SearchBar class="w-80" />
                    <FilterIcon class="" />
                </span>
            </div>
        </template>
        <RowAgency :agencies="shownAgencies" />
    </AuthenticatedLayout>
</template>
