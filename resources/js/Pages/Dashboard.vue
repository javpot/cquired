<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import SearchBar from "@/Components/SearchBar.vue";
import AgencyCard from "@/Components/AgencyCard.vue";
import Footer from "@/Components/Footer.vue";
import { Link } from "@inertiajs/vue3";
import CarouselAgencyCard from "@/Components/CarouselAgencyCard.vue";
import Category from "@/Components/Signup/Category.vue";
import Domain from "@/Components/Signup/Domain.vue";
import Forfait from "@/Components/Signup/Forfait.vue";
import Location from "@/Components/Signup/Location.vue";
import InsInscriptionDone from "@/Components/Signup/InsInscriptionDone.vue";


</script>


<template>
    <Head title="Home" />

    <!-- <InsInscriptionDone /> -->
    <AuthenticatedLayout class="mb-4">
        <template #header>
            <div class="w-full h-8 flex flex-row justify-between items-center">
                <h2
                    class="font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                >
                    Web development
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
        <Link :href="route('billing')">Click me</Link>
    </AuthenticatedLayout>
    <Footer />
</template>
