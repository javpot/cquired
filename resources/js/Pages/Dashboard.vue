<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import SearchBar from "@/Components/SearchBar.vue";
import AgencyCard from "@/Components/AgencyCard.vue";
import PageNumbers from "@/Components/PageNumbers.vue";
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <template #header>
            <div class="w-full flex flex-row">
                <h2
                    class="w-full font-semibold text-xl text-gray-800 leading-tight align-middle left-0"
                >
                    Web development
                </h2>
                <SearchBar />
                <img
                    class="w-6 h-6 right-0 ml-8 mt-1 cursor-pointer"
                    src="../../assets/filter-icon.png"
                    alt="filter"
                />
            </div>
        </template>

        <div class="flex flex-row justify-around mt-4">
            <AgencyCard />
            <AgencyCard />
            <AgencyCard />
            <AgencyCard />
            <AgencyCard />
        </div>
        <PageNumbers />
    </AuthenticatedLayout>
</template>
