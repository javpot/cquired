<script>

export default {
    data() {
        return {
            
        };
    },
    props: {
        id: Int32Array,
        img: String,
        titre: String,
        description: String
    }
};
</script>
<template>
    <div class="service-card">
        <img src="../../assets/imgservice.png" alt="" srcset="" class="img-service">
        <div class="icon-save-container">
            <img src="../../assets/icons-save.png" alt="" srcset="" class="icon-save">
        </div>
        
        <h3>{{titre}}</h3>
        <p>{{description}}</p>

    </div>

</template>

<style scoped>
.icon-save{
    height: 30px;
    width: 30px;
    position: relative;
    left: 170px;
    bottom:110px;
    margin-top: 10px;
}
.icon-save-container{
    height: 0;
}
.service-card{
    display: flex;
    flex-direction: column;
    justify-content: space-between;

    width: 200px;
    height: 200px;
}
.img-service{
    height: 100px;
    width: 200px;
    border-radius: 15px;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
h3{
    margin-left: 5px;
    font-weight: 600;
    font-size: 1.2em;
}
p{
    width: 250px;
    height: 50px;
    margin-left: 5px;
    overflow: hidden;
}
</style>