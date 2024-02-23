<script>
export default {
    data() {
        return {};
    },
};
</script>

<template>

    <div class="w-screen h-90 flex flex-col justify-center items-center">
        <div class="h-90 w-3/5 bg-white flex flex-col shadow-md">
            <div class="h-8 bg-sky-300 w-4/5 relative z-20"></div>
            <div class="h-8 bg-stone-300 w-full relative z-10 bottom-7"></div>
            <h2 class="text-3xl text-center">Je me trouve à</h2>
            <div class="h-90 w-full flex flex-col justify-evenly items-center">
            <div>
                 <input type="text">
                <p class=" text-base ">*Entrez simplement le nom de votre ville, cela nous aidera à vous montrer les agences et les indépendants en fonction de leur proximité. </p>
            </div>

            <button class="h-12 w-1/2 bg-sky-300 text-center rounded-xl">Continue</button>
           
        </div>
    </div>


    </div>

</template>

<style scoped>
.w-90-percent{
    width: 90%;
}
.h-90-percent{
    height: 90%;
}
.h-90 {
    height: 90vh;
}

.w-90 {
    width: 90vw;
}

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
    width: 60%;
    background-color: #6EC3E7;;
    position: relative;
    bottom : 0.3%;
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
    width: 80%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
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
button{
    height: 50px;
    width: 50%;
    background-color: #6EC3E7;
    text-align: center;
    border-radius: 30px;
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
    input{
        width: 100%;
    }
    .model-client-freelancer-info{
        height: 80%;
        width: 100%;
        display: flex;
        flex-direction:column;
        justify-content: space-evenly;
        align-items: center;
    
    }
    img{
        height: 150px;
        width: 200px;
    }
    .progress-bar{
        height: 5%;
        width: 60%;
        background-color: #6EC3E7;;
        position: relative;
        bottom : 0%;
        z-index: 2;
    }
    .progress-bar-1{ 
        height: 5%;
        width: 100%;
        background-color: #D9D9D9;
        position: relative;
        bottom: 5%;
        z-index: 1;
       
    
    }

}
</style>