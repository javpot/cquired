<script setup>
import AgencyCard2 from "@/Components/AgencyCard2.vue";
import AgencyCard3 from "@/Components/AgencyCard3.vue";
import AgencyCard4 from "@/Components/AgencyCard4.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
</script>

<template>
    <AuthenticatedLayoutAgency>
        <section class="flex flex-col bg-gray-100 rounded-lg">
            <div class="flex flex-row ml-4 mx-4 my-4 bg-white rounded-lg">
                <AgencyCard2 />
                <AgencyCard3 />
            </div>
            <AgencyCard4 />
        </section>
    </AuthenticatedLayoutAgency>
</template>
<!-- ../../assets/pfp-icon.png -->
<!-- ../../assets/entrepriseImgAccueil.png -->
