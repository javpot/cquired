<script>
export default {
    data() {
        return {};
    },
};
</script>

<template>

    <div class="container-inscription-section-1  flex flex-column justify-center items-center">
        <div class="model-client-freelancer">
            <div class="progress-bar">
            </div>
            <div class="progress-bar-1">
            </div>
            <h2>Je suis me trouve à</h2>
            <div class="model-client-freelancer-info">
            <div>
                <img src="../../assets/checkmarkblue.png" alt="" class="check-blue">
                
                <p class="text-center text-xl ">Freelancer or Agency</p>
            </div>
            <div>
                <img src="../../assets/checkmarkblue.png" alt="" class="check-blue">
                <img src="../../assets/Group 4241.png" alt="" srcset="">
                <p class="text-center text-xl">Client</p>
            </div>

        </div>
    </div>


    </div>

</template>

<style scoped>

.container-inscription-section-1{
    height: 90vh;
    width: 100vw;
}
.model-client-freelancer{
    height: 90%;
    width: 90%;
    background-color: white;
display: flex;
flex-direction: column;

box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

}
.progress-bar{
    height: 5%;
    width: 10%;
    background-color: #6EC3E7;;
    position: relative;
    z-index: 2;
}
.progress-bar-1{ 
    height: 5%;
    width: 100%;
    background-color: #D9D9D9;
    position: relative;
    bottom: 4.5%;
    z-index: 1;
   

}
.model-client-freelancer-info{
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

}
.model-client-freelancer-info>div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
img{
    height: 100px;
    width: 150px;
}
.check-blue{
    height: 50px;
    width: 50px;
    position: relative;
    left:80px;
    top: 100px;
    display: none;
}
@media screen and (min-width: 900px) {
    .model-client-freelancer{
        height: 90%;
        width: 60%;
        background-color: white;
    display: flex;
    flex-direction: column;
    
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    
    }
    
    .model-client-freelancer-info{
        height: 100%;
        width: 100%;
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    
    }
    img{
        height: 150px;
        width: 200px;
    }

}
</style>