<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, usePage } from "@inertiajs/vue3";
import SearchBar from "@/Components/SearchBar.vue";
import AgencyCard from "@/Components/AgencyCard.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/vue3";
import CarouselAgencyCard from "@/Components/CarouselAgencyCard.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
import RowClient from "@/Components/RowClient.vue";
import axios from "axios";
import { onMounted, ref } from "vue";
import FilterIcon from "@/Components/FilterIcon.vue";

const user = usePage().props.auth.user;
const category = user.category;
const domain = ref("");
const location = ref("");
let agencies = ref([]);
let clients = ref([]);
const textplaceholder = "Look for a city..";
onMounted(async () => {
    if (category === "Client") {
        const clientData = usePage().props.auth.client;
        domain.value = clientData.domain;
        location.value = clientData.location;
        await getAgencies();
    } else {
        const agencyData = usePage().props.auth.agency;
        domain.value = agencyData.domain;
        await getClientsByDomain();
    }
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
        const response = await axios.get("/clients");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        // console.log(response.data.clients);
        clients.value = response.data.clients;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}

async function getClientsByDomain() {
    try {
        const response = await axios.post("/clients-domain", {
            domain: domain.value,
        });
        clients.value = response.data.clients;
    } catch (error) {
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

                <SearchBar class="w-80" />
            </div>
        </template>
        <CarouselAgencyCard title="Agencies" data="" />
        <div class="flex flex-row justify-between">
            <h2
                class="w-full font-semibold text-2xl text-gray-800 leading-tight align-middle left-0 ml-7 mt-4"
            >
                Freelancers
            </h2>
            <Link
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </Link>
        </div>
        <div class="flex flex-row justify-around mt-4">
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
        </div>
        <div class="flex flex-row justify-between">
            <h2
                class="w-full font-semibold text-2xl text-gray-800 leading-tight align-middle left-0 ml-7 mt-4"
            >
                Near You
            </h2>
            <Link
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </Link>
        </div>
        <div class="flex flex-row justify-around mt-4">
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
        </div>
        <div class="flex flex-row justify-between">
            <h2
                class="w-full font-semibold text-2xl text-gray-800 leading-tight align-middle left-0 ml-7 mt-4"
            >
                Favourites
            </h2>
            <Link
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </Link>
        </div>
        <div class="flex flex-row justify-around mt-4">
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
            />
            <AgencyCard
                image="../../assets/image9.png"
                title="Jeff Agency"
                description="I can build house for you for a cheap price we a are based..."
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
