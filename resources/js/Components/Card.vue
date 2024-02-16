<script>
export default {
    data() {
        return {
           
            
        };
    },
    props: {
        img: String,
        titre: String,
        description: String
    }
};
</script>


<template>

            <div>
                <img src="../../assets/checkmarkblue.png" alt="" class="check-blue">
                <img src='../../assets/Group 2685.png'  alt="" srcset="">
                <p class="text-center text-xl ">{{titre}}</p>
            </div>
           



</template>

<style scoped>


div{
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
 

    img{
        height: 150px;
        width: 200px;
    }

}
</style>