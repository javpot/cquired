<script setup>
import PrimaryButton from "@/Components/PrimaryButton.vue";
import AgencyCard2 from "@/Components/AgencyCard2.vue";
import AgencyCard3 from "@/Components/AgencyCard3.vue";
import AgencyCard4 from "@/Components/AgencyCard4.vue";
</script>

<template>
    <section class="flex flex-col bg-gray-100 rounded-lg">
        <div class="flex flex-row ml-4 mx-4 my-4 bg-white rounded-lg">
            <AgencyCard2 />
            <AgencyCard3 />
        </div>
        <AgencyCard4 />
    </section>
</template>
<!-- ../../assets/pfp-icon.png -->
<!-- ../../assets/entrepriseImgAccueil.png -->
