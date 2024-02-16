<script>
import ServiceCard from '../Components/ServiceCard.vue';
export default {
    data() {
        return {
            imgSrc:''
        };
    },
    components:{
   
    ServiceCard
}
};
</script>

<template>

    <div class="container-service">
        <div class="service">
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>
 <ServiceCard titre="Jeff Agency" description="I can build house for you for a cheap price we a are based..."></ServiceCard>

        </div>

    </div>
</template>

<style scoped>
.container-service{
height: 100vh;
width: 100vw;
display: flex;
justify-content: center;
align-items: center;

}
.service{
    height: 85%;
    width: 90%;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap:50px;
    padding: 20px;
    border: solid #D9D9D9 1px;
    overflow: hidden;
}
</style>