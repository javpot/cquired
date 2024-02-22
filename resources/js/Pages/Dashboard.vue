<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import SearchBar from "@/Components/SearchBar.vue";
import AgencyCard from "@/Components/AgencyCard.vue";
import PageNumbers from "@/Components/PageNumbers.vue";
import Footer from "@/Components/Footer.vue";
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout class="mb-4">
        <template #header>
            <div class="w-full flex flex-row">
                <h2
                    class="w-full font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                >
                    Web development
                </h2>
                <SearchBar class="w-35" />
            </div>
        </template>

        <div class="flex flex-row justify-between">
            <h2
                class="w-full font-semibold text-2xl text-gray-800 leading-tight align-middle left-0 ml-7 mt-4"
            >
                Agencies
            </h2>
            <h2
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </h2>
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
                Freelancers
            </h2>
            <h2
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </h2>
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
            <h2
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </h2>
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
            <h2
                class="w-full flex flex-row-reverse font-semibold text-lg text-gray-800 mr-8 mt-4"
            >
                See More
            </h2>
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
    <Footer></Footer>
</template>
