<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavView from '../Components/NavView.vue'
import Accueil from '../Components/Accueil.vue'
import LogIn from '@/Components/LogIn.vue';
import SignIn from '@/Components/SignIn.vue';
import Inscription from  '@/Components/Inscription.vue'
import ServiceCard from '@/Components/ServiceCard.vue';
import ServiceSelection from '@/Layouts/ServiceSelection.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
   
    <div class="container">
        <!--<NavView></NavView>-->
        <!--<Accueil></Accueil>-->
      
     <!--<SignIn></SignIn>-->
 <!--<LogIn></LogIn>-->
 <!-- <Inscription></Inscription> -->
 <!-- <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard> -->
 <!-- <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard> -->
<ServiceSelection></ServiceSelection>
    </div>
    
   
        
        
        

    
</template>

<style>
body,html{
    overflow-x: hidden;
}
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Inter', sans-serif;
    font-family: 'Lato', sans-serif;
    font-family: 'Roboto', sans-serif;
}
.container{
    min-height: 100vh;
    min-width: 100vw;
}
 /*
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E");
    }
}
*/
</style>
