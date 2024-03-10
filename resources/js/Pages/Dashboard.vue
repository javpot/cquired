<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import SearchBar from "@/Components/SearchBar.vue";
import Footer from "@/Components/Footer.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
import RowClient from "@/Components/RowClient.vue";
import axios from "axios";
import { onMounted, ref } from "vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import CarousselAgency from "@/Components/CarousselAgency.vue";

const user = usePage().props.auth.user;
const category = user.category;
const domain = ref("");
const location = ref("");
let agencies = ref([]);
const agenciesDomain = ref([]);
const freelancersDomain = ref([]);
const agenciesLocation = ref([]);
const agenciesSaved = ref([]);

let clients = ref([]);
let textplaceholder = "Look for a city..";

onMounted(async () => {
    if (category === "Client") {
        const clientData = usePage().props.auth.client;
        domain.value = clientData.domain;
        location.value = clientData.location;
        await getAgencies();
    } else {
        const agencyData = usePage().props.auth.agency;
        domain.value = agencyData.domain;
        await getClients();
    }
    agenciesDomain.value = agencies.value.filter((agency) => {
        return agency.domain === domain.value;
    });
    freelancersDomain.value = agenciesDomain.value.filter((agency) => {
        return agency.category === "Freelancer";
    });
    agenciesLocation.value = agencies.value.filter((agency) => {
        return agency.location === location.value;
    });
});

async function getAgencies() {
    try {
        const response = await axios.get("/agencies");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        // console.log(response.data.Agencies);
        agencies.value = response.data.Agencies;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}
async function getClients() {
    try {
        const response = await axios.get("/get-clients-by-limit");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        // console.log(response.data.clients);
        clients.value = response.data.clients;
        console.log(response);
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout class="mb-4" v-if="category === 'Client'">
        <template #header>
            <div class="w-full h-8 flex flex-row justify-between items-center">
                <h2
                    class="font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                >
                    {{ domain }}
                </h2>
            </div>
        </template>
        <div class="flex flex-col space-y-6 my-4">
            <CarousselAgency
                title="Agencies"
                :agencies="agenciesDomain"
                message="No agencies in your domain."
            />
            <CarousselAgency
                title="Freelancers"
                :agencies="freelancersDomain"
                message="No freelancers in your domain."
            />
            <CarousselAgency
                title="Near You"
                :agencies="agenciesLocation"
                message="No agencies in your location."
            />
            <CarousselAgency
                title="Saved"
                :agencies="null"
                message="No agencies saved."
            />
        </div>
    </AuthenticatedLayout>
    <AuthenticatedLayoutAgency v-else>
        <template #header>
            <div class="w-full h-8 flex flex-row justify-between items-center">
                <h2
                    class="font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                >
                    {{ domain }}
                </h2>

                <span class="flex flex-row items-center">
                    <SearchBar :placeholder="textplaceholder" class="w-80" />
                    <FilterIcon />
                </span>
            </div>
        </template>

        <div class="flex flex-col items-center">
            <h2 class="text-lg text-center my-2">List of Clients</h2>
            <RowClient :clients="clients" class="w-3/4 h-screen" />
        </div>
    </AuthenticatedLayoutAgency>
    <Footer></Footer>
</template>
