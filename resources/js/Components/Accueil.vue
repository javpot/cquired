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
                <div class="section-3-btn-container">
                    <button>S'inscrire gratuitement</button>
                </div>
            </div>
            <div class="section-3-img-container">
                <img src="../../assets/benefImg.png" alt="" srcset="">
            </div>
            
        </section>
        <section class="section-4">
            <div class="section-4-info">
            <div class="section-4-img-container">
                <img src="../../assets/entrepriseImgAccueil.png" alt="" srcset="">
            </div>
            <div class="section-4-text">
                <h2>Pour les Entreprises</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident molestias illo, ullam nam deserunt corrupti quae doloribus quia facilis dolore? Iure corporis unde vitae atque magnam laudantium similique eaque molestias.
                </p>
                <div class="section-4-btn-container">
                    <button>Voir plus</button>
                </div>
            </div>
        </div>
        

        </section>
        <section class="section-5">
            <div class="section-5-info">
            <div class="section-5-img-container">
                <img src="../../assets/clientImgAccueil.jpg" alt="" srcset="">
            </div>
            <div class="section-5-text">
                <h2>Pour les Clients</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident molestias illo, ullam nam deserunt corrupti quae doloribus quia facilis dolore? Iure corporis unde vitae atque magnam laudantium similique eaque molestias.
                </p>
                <div class="section-5-btn-container">
                    <button>Voir plus</button>
                </div>
            </div>
        </div>
        

        </section>

        <section class="section-6">
            <div class="section-6-info">
                <h2>Alors intéresser?</h2>
                <p>Ne perdez pas de temps et venez vivre un expérience inoubliable</p>
                <div class="section-6-btn-container">
                    <button>S'inscrire</button>
                </div>
                
            </div>
        </section>
        <div class="copyright-footer">
            <div class="copyright-footer-section-1">
                <img src="../../assets/cquired-logo.png" alt="" />
                <div class="container-footer-img">
                    <a href="">
                        <img src="../../assets/icons8-mail-50 1.png" alt="mail image" /></a>
                    <a href="">
                        <img src="../../assets/icons8-linkedin-80 1.png" alt="linkedin image" /></a>
                </div>
            </div>
            <hr />
            <p>© Cquired All rights reserved</p>
        </div>

    </div>

</template>
<style scoped>
p{
    line-height: 1.6;
}
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
   min-height: 50vh;
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
  min-height: 150vh;
    width: 100vw;
    display: flex;
    flex-direction: column;
    
    align-items: center;
    justify-content: center;
}
.section-3-info{
    width: 90%;
    height: 70vh;
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
.section-3-btn-container{
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-3-info>div>button{
    height: 40px;
    width: 250px;
    background-color: #AD12C7;
    color: white;
    border-radius: 30px;
    
    
}
.section-3-img-container{
width: 100;

}
.section-3-img-container>img{
    height: 300px;
    width: 300px;
}

.section-4{
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-4-info{
    width: 90%;
}
.section-4-text{
    background-color:#0d094c;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap:15px;
    padding-bottom: 15px;
}
.section-4-text>h2,.section-4-text>p{
    width: 90%;
}
.section-4-btn-container{
    width: 90%;
    
}
.section-4-btn-container>button{
    height: 40px;
    width: 100px;
    background-color: white;
    color: #63646b;
    border-radius: 30px;
    /*for animation*/
   transition: 0.3s;
}
.section-4-btn-container>button:hover{
    
    color: white;
    background-color: black;
    
  
}

.section-5{
    padding-top: 50px;
    min-height: 50vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-5-info{
    width: 90%;
}
.section-5-text{
    background-color:#AD12C7;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap:15px;
    padding-bottom: 15px;
}
.section-5-text>h2,.section-5-text>p{
    width: 90%;
}
.section-5-btn-container{
    width: 90%;
    
}
.section-5-btn-container>button{
    height: 40px;
    width: 100px;
    background-color: white;
    color: #63646b;
    border-radius: 30px;
    /*for animation*/
   transition: 0.3s;
}
.section-5-btn-container>button:hover{
    color: white;
    background-color: black;
    
    border: 1px solid #AD12C7;
}

.section-6{
    min-height: 50vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-6-info{
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
}
.section-6-btn-container{
    width: 100%;
    text-align: center;
    
}
.section-6-btn-container>button{
    height: 40px;
    width: 100px;
    background-color: white;
    color: #AD12C7;
    border-radius: 30px;
    border: 1px solid #AD12C7;
    /*for animation*/
   transition: 0.3s;
}
.section-6-btn-container>button:hover{
    color: white;
    background-color: #AD12C7;
    
  
}


.copyright-footer{
    background-color: #4a5b6b;
    height: 7em;
    padding: 14px 8px;
    width: 100vw;
}
.copyright-footer-section-1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 98%;
}
.copyright-footer-section-1 img{
  width: 130px;
  height: 2.2em;
}
.copyright-footer-section-1>div>a>img{
    width: 35px;
    
}
.container-footer-img{
    
    display: flex;
    justify-content: space-between;
}
hr{
    color: white;
    width: 86%;
    margin: auto;
}
.copyright-footer p {
    text-align: center;
    margin-top: 1em;
    color: white;
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