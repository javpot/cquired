<script>
import InsClientFreelancer from '@/Layouts/InsClientFreelancer.vue';
import InsLocation from'@/Layouts/InsLocation.vue';
export default {
    data() {
        return {};
    },
    components: { InsClientFreelancer, InsLocation }
};
</script>

<template>

    <div class="container-inscription h-screen w-screen">

        <h1 class="text-center h-16 flex justify-center items-center text-xl font-bold ">Join as a client or freelancer</h1>
        <!--<InsClientFreelancer></InsClientFreelancer>-->
        <InsLocation></InsLocation>
    </div>

</template>

<style scoped>

</style>