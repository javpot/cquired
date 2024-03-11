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
import { Link } from "@inertiajs/vue3";

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
        return agency.domain === domain.value && agency.category === "Agency";
    });
    freelancersDomain.value = agencies.value.filter((agency) => {
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
        console.log(response.data);
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
                <Link
                    :href="route('explore')"
                    class="flex flex-row items-center text-lg hover:text-xl transition-transform duration-400 ease-in-out"
                    >See All
                    <svg
                        fill="none"
                        height="20"
                        viewBox="0 0 24 24"
                        width="20"
                        xmlns="http://www.w3.org/2000/svg"
                        class="ml-2"
                    >
                        <path
                            d="m13.2929 7.70711c-.3905-.39053-.3905-1.02369 0-1.41422.3905-.39052 1.0237-.39052 1.4142 0l5 5.00001c.3905.3905.3905 1.0237 0 1.4142l-5 5c-.3905.3905-1.0237.3905-1.4142 0s-.3905-1.0237 0-1.4142l3.2929-3.2929h-11.5858c-.55229 0-1-.4477-1-1s.44772-1 1-1h11.5858z"
                            fill="#1e1e1e"
                        />
                    </svg>
                </Link>
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
    <Footer />
</template>
