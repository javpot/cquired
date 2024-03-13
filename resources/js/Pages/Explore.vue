<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import DomainListDropdown from "@/Components/DomainListDropdown.vue";
import SearchBar from "@/Components/SearchBar.vue";
import { onMounted, ref } from "vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import RowAgency from "@/Components/RowAgency.vue";
import CancelPost from "@/Components/CancelPost.vue";
import CancelFilters from "@/Components/CancelFilters.vue";
import InputError from "@/Components/InputError.vue";

let agencies = ref([]);
let shownAgencies = ref([]);
let errorMessage = ref("");

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

function submitSearch(searchValue) {
    // console.log(searchValue);
    if (searchValue !== "") {
        if (/^[a-zA-Z\s]+$/.test(searchValue)) {
            shownAgencies.value = agencies.value;

            shownAgencies.value = agencies.value.filter((agency) => {
                const regex = new RegExp(searchValue, "i");
                return regex.test(agency.name);
            });
            errorMessage.value = "";
        } else {
            errorMessage.value =
                "Search value must contain only letters and spaces.";
        }
    } else {
        shownAgencies.value = agencies.value;
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
                <span class="flex flex-row items-center">
                    <CancelFilters
                        :onclick="
                            () => {
                                shownAgencies = agencies;
                            }
                        "
                    />
                    <DomainListDropdown :submit="submitDomain" />
                </span>
                <div class="flex flex-row">
                    <span class="flex flex-col">
                        <SearchBar
                            class="w-80"
                            placeholder="Look for an agency by name"
                            :submit="submitSearch"
                        />
                        <InputError :message="errorMessage" />
                    </span>
                    <!-- <FilterIcon class="" /> -->
                </div>
            </div>
        </template>
        <RowAgency :agencies="shownAgencies" />
    </AuthenticatedLayout>
</template>
