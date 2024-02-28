<script setup>
import ClientCard from "@/Components/ClientCard.vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
</script>
<template>
    <AuthenticatedLayoutAgency class="bg-white">
        <section class="w-full flex flex-col items-center">
            <div class="w-2/5 flex flex-row justify-between mt-4">
                <h2 class="text-3xl">Clients</h2>
                <FilterIcon />
            </div>
            <div class="w-full flex flex-col mx-4 my-4 items-center">
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
                <ClientCard class="max-w-xl" />
            </div>
        </section>
    </AuthenticatedLayoutAgency>
</template>
