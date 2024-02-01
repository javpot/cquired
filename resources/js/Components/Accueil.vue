<script>
export default {
    data() {
        return {

        }
    }
}

</script>
<template>
    <div class="container-accueil">
        <section class="section-1">

         <!--  <div class="section-1-background"> </div>
            -->
            <!--background blur a faire-->
                
            
            <div class="section-1-info">
                <h2>Libérez votre talent</h2>
                <h1>connectez-vous avec les meilleurs freelances ici !</h1>
                <div class="container-search">
                    <input type="search" placeholder="chercher votre service">
                    <img src="../../assets/loupe2.png" alt="" srcset="" class="loupe">
                </div>
                <p><span>Populaire: </span>Web developement, AI, Plomberie</p>
            </div>
            
        </section>
        <section class="section-2">
            <div class="section-2-info">
            <h2>Quelques Services</h2>
            <p>Vous voulez voir plus ? <span>Chercher</span></p>
            <div class="carrousel-service">

                

            </div>
        </div>
        </section>

        <section class="section-3">
            <div class="section-3-info">
                <h2>Vous n'avez rien à perdre</h2>
                <div>
                    <img src="../../assets/check.png" alt="" srcset="" class="check">
                    <p>Aucun frais d’inscription</p>
                </div>
                <div>
                    <img src="../../assets/check.png" alt="" srcset="" class="check">
                    <p>Poster une offre et engager </p>
                </div>
                <div>
                    <img src="../../assets/check.png" alt="" srcset="" class="check">
                    <p>Travailler avec les meilleurs, tout en respectant votre bugdet </p>
                </div>
            </div>
            
        </section>

    </div>

</template>
<style scoped>

.container-accueil{
    min-height: 85vh;
   min-width: 100vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/*section 1*/
.loupe{
    width: 40px;
}

.section-1{

width: 100vw;
height: 85vh;
text-align: center;

display: flex;
flex-direction: column;
justify-content: center;
align-items: center;

position: relative;
z-index: 1;



}
.section-1-background{

    width: 100vw;
    height: 85vh;
    position: absolute;
z-index: 1;

    background: rgba( 255, 255, 255, 0.15 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 13.5px );
-webkit-backdrop-filter: blur( 13.5px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
}
.section-1-info{
    width: 90vw;
height: 50vh;

display: flex;
flex-direction: column;
justify-content: space-around;
align-items: center;

background-color: transparent;
}
.section-1-info>h2{
    font-size: 1.2em;
    font-weight: 600;
}
.section-1-info>h1{
    font-size: 2em;
    font-weight: 600;
}
.section-1-info>p{
    display: none;
}
.container-search{
    display: flex;
}
.container-search>input{
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    width: 40vw;
}
.container-search>img{
    background-color: #AD12C7;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
}
/*section 2*/
.section-2{
   min-height: 80vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    
    align-items: center;
   
}
.section-2-info{
    height: 100%;
    width: 90%;
}
h2{
    font-size: 2em;
font-weight: 600;
}
.section-2-info>p>span{
    color: #AD12C7;
}
/*carrousel a faire*/
.carrousel-service{
    height: 200px;
    width: 200px;
    position: relative;
    left: 25%;
    background-color: #AD12C7;
}
.section-3{
    height: 100vh;
    width: 100vw;
    display: flex;
    
    align-items: center;
    justify-content: center;
}
.section-3-info{
    width: 90%;
    height: 80%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;

}
.check{
    width: 40px;
    height: 40px;
}
.section-3-info>div{
    display: flex;
    font-weight:600;
    font-size: 1.2em;
}




/*section 1 responsive*/
@media screen and (min-width: 400px) {
    .section-1-info>h2{
        font-size: 1.3em;
    }
    .section-1-info>h1{
        font-size: 2.1em;
    }
    

}
@media screen and (min-width: 500px) {
    .section-1-info>h2{
        font-size: 1.4em;
    }
    .section-1-info>h1{
        font-size: 2.2em;
        width: 85%;
    }

}
@media screen and (min-width: 600px) {

    .section-1-info>h2{
        font-size: 1.5em;
    }
    .section-1-info>h1{
        font-size: 2.3em;
        width: 72%;
    }
}
@media screen and (min-width: 700px) {
    .section-1-info>h2{
        font-size: 1.6em;
    }
    .section-1-info>h1{
        font-size: 3em;
        width: 64%;
    }

}
@media screen and (min-width: 800px) {
    .section-1-info>h2{
        font-size: 1.7em;
    }
    .section-1-info>h1{
        font-size: 3.2em;
        width: 57%;
    }

}
@media screen and (min-width: 900px) {
    .section-1-info>h2{
        font-size: 1.8em;
    }
    .section-1-info>h1{
        font-size: 3.4em;
        width: 71%;
    }

}
@media screen and (min-width: 1000px) {
    .section-1-info>h2{
        font-size: 1.9em;
    }
    .section-1-info>h1{
        font-size: 3.5em;
        width: 71%;
    }

}
@media screen and (min-width: 1100px) {
    .section-1-info>h2{
        font-size: 1.9em;
    }
    .section-1-info>h1{
        font-size: 3.6em;
        width: 71%;
    }

}
@media screen and (min-width: 1200px) {
    .section-1-info>h2{
        font-size: 2em;
    }
    .section-1-info>h1{
        font-size: 3.7em;
        width: 60%;
    }

}
@media screen and (min-width: 1300px) {
    .section-1-info>h2{
        font-size: 2.1em;
    }
    .section-1-info>h1{
        font-size: 4em;
        width: 70%;
    }


}
@media screen and (min-width: 1400px) {
    .section-1-info>h2{
        font-size: 2.2em;
    }
    .section-1-info>h1{
        font-size: 4.2em;
        width: 75%;
    }

}
@media screen and (min-width: 1500px) {
    .section-1-info>h2{
        font-size: 2.3em;
    }
    .section-1-info>h1{
        font-size: 4.4em;
        width: 75%;
    }

}
@media screen and (min-width: 1600px) {
    .section-1-info>h2{
        font-size: 2.4em;
    }
    .section-1-info>h1{
        font-size: 4.6em;
        width: 80%;
    }

}
@media screen and (min-width: 1700px) {
    .section-1-info>h2{
        font-size: 2.5em;
    }
    .section-1-info>h1{
        font-size: 4.8em;
        width: 85%;
    }

}
@media screen and (min-width: 1800px) {
    .section-1-info>h2{
        font-size: 2.6em;
    }
    .section-1-info>h1{
        font-size: 5em;
    }

}
@media screen and (min-width: 1900px) {

}
@media screen and (min-width: 2000px) {

}
@media screen and (min-width: 2100px) {

}

</style>