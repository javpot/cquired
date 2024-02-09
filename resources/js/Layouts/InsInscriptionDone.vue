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
            

            <div class="model-client-freelancer-info">
            <div>
                
              
                
                
                <h2 class="text-3xl">👍 Bravo!! vous êtes inscrit</h2>

                

                
            </div>

       <!--<button class="continue-btn">Continue</button>-->  
           
        </div>
    </div>


    </div>

</template>

<style scoped>
h3{
    margin-left: 10%;
}
.ligne{
    height: 2px;
    width: 80%;
    position: relative;
    left: 10%;
    background-color: black;
}
li{
    list-style-type: none;
    margin-left: 10%;
}

.container-inscription-section-1{
    height:90vh;
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
    width: 100%;
    background-color: #6EC3E7;;
    position: relative;
    top : 0.5%;
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
    height: 90%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

}
.model-client-freelancer-info>div{
    height: 80%;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    align-items: center;
   
    
}
.card-subscription{
    height: 100%;
    width: 20%;
    
    background-color: #a6d0e3;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
  
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
.card-subscription:nth-child(2){
    
    background-color: #6EC3E7;
}
.card-subscription:nth-child(3){
    
    background-color: #3ab3e7;
}
.card-subscription:nth-child(4){
    
    background-color: #0f9edc;
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
.selection-btn{
    height: 50px;
    width: auto;
    padding-left: 10px;
    padding-right: 10px;
    background-color: white;
    color: #adadad;

    border-radius: 15px;
    border: 1px solid #adadad;
    transition: 0.3s;
}
.selection-btn:hover{
    border: 1px solid #6EC3E7;
    color: #6EC3E7;
}

.continue-btn{
    height: 50px;
    width: 50%;
    background-color: #6EC3E7;
    text-align: center;
    border-radius: 30px;
    color: black;
}
@media screen and (min-width: 900px) {
    .model-client-freelancer-info>div{
        height: 80%;
        width: 100%;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        gap: 15px;
        justify-content: center;
        align-items: center;
       
        
    }
    .container-inscription-section-1{
    height: 90vh;
    width: 100vw;
}


    .model-client-freelancer{
        height: 90%;
        width: 95%;
        background-color: white;
    display: flex;
    flex-direction: column;
    
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    
    }
    input{
        width: 100%;
    }
    .model-client-freelancer-info{
        height: 90%;
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
        width: 100%;
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
        bottom: 5%;
        z-index: 1;
       
    
    }

}
</style>