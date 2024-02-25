<script setup>
import { Link } from "@inertiajs/vue3";
import AgencyCard from "./AgencyCard.vue";

defineProps({
    title: String,
    data: Array, // liste des agencies/freelancers correspondant au filtre
});
</script>

<template>
    <div class="flex flex-row justify-between">
        <h2
            class="w-full font-semibold text-2xl text-gray-800 leading-tight align-middle left-0 ml-7 mt-4"
        >
            {{ title }}
        </h2>
        <Link
            :href="route('explore')"
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
</template>
