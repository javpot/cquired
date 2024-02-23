<script>
import InsClientFreelancer from '@/Layouts/InsClientFreelancer.vue';
import InsLocation from'@/Layouts/InsLocation.vue';
import InsDomain from  '@/Layouts/InsDomain.vue';
import InsForfait from  '@/Layouts/InsForfait.vue';
import InsInscriptionDone from '@/Layouts/InsInscriptionDone.vue';
export default {
    data() {
        return {};
    },
    components: { InsClientFreelancer, InsLocation, InsDomain, InsForfait, InsInscriptionDone }
};
</script>

<template>

    <div class="container-inscription h-screen w-screen">

       <h1 class="text-center h-16 flex justify-center items-center text-xl font-bold ">Choissisez votre plan d'abonnement</h1>
        <!-- <InsClientFreelancer></InsClientFreelancer> -->
       <!-- <InsLocation></InsLocation> -->
       <!-- <InsDomain></InsDomain> -->
       
       <!--InsForfait></InsForfait>-->
       <InsInscriptionDone></InsInscriptionDone>
       
    </div>

</template>

<style scoped>

</style>