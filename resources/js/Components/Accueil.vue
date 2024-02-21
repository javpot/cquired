<script>
export default {
    data() {
        return {};
    },
};
</script>
<template>
    <div class="container-accueil">
        <section class="section-1">
            <!--  <div class="section-1-background"> </div>
            -->
            <!--background blur a faire-->

            <div class="section-1-info">
                <h2>Libérez votre talent</h2>
                <h1>connectez-vous avec les meilleures agences ici !</h1>
                <div class="container-search">
                    <input type="search" placeholder="chercher votre service" />
                    <img
                        src="../../assets/loupe2.png"
                        alt=""
                        srcset=""
                        class="loupe"
                    />
                </div>
                <p><span>Populaire: </span>Web developement, AI, Plomberie</p>
            </div>
        </section>
        <section class="section-2">
            <div class="section-2-info">
                <h2>Quelques Services</h2>
                <p>Vous voulez voir plus ? <span>Chercher</span></p>
                <div class="carrousel-service">
                    <div>
                        <div class="carousel">
                            <ul class="slides" style="height: 50vh">
                                <input
                                    type="radio"
                                    name="radio-buttons"
                                    id="img-1"
                                    checked
                                />
                                <li class="slide-container">
                                    <div class="slide-image">
                                        <img
                                            src="https://upload.wikimedia.org/wikipedia/commons/9/9e/Timisoara_-_Regional_Business_Centre.jpg"
                                        />
                                    </div>
                                    <div class="carousel-controls">
                                        <label for="img-3" class="prev-slide">
                                            <span>&lsaquo;</span>
                                        </label>
                                        <label for="img-2" class="next-slide">
                                            <span>&rsaquo;</span>
                                        </label>
                                    </div>
                                </li>
                                <input
                                    type="radio"
                                    name="radio-buttons"
                                    id="img-2"
                                />
                                <li class="slide-container">
                                    <div class="slide-image">
                                        <img
                                            src="https://content.r9cdn.net/rimg/dimg/db/02/06b291e8-city-14912-171317ad83a.jpg?width=1750&height=1000&xhint=3040&yhint=2553&crop=true"
                                        />
                                    </div>
                                    <div class="carousel-controls">
                                        <label
                                            for="img-1"
                                            class="prev-slide"
                                            style="height: 50vh"
                                        >
                                            <span>&lsaquo;</span>
                                        </label>
                                        <label
                                            for="img-3"
                                            class="next-slide"
                                            style="height: 50vh"
                                        >
                                            <span>&rsaquo;</span>
                                        </label>
                                    </div>
                                </li>
                                <input
                                    type="radio"
                                    name="radio-buttons"
                                    id="img-3"
                                />
                                <li class="slide-container">
                                    <div class="slide-image">
                                        <img
                                            src="https://speakzeasy.files.wordpress.com/2015/05/twa_blogpic_timisoara-4415.jpg"
                                        />
                                    </div>
                                    <div class="carousel-controls">
                                        <label
                                            for="img-2"
                                            class="prev-slide"
                                            style="height: 50vh"
                                        >
                                            <span>&lsaquo;</span>
                                        </label>
                                        <label
                                            for="img-1"
                                            class="next-slide"
                                            style="height: 50vh"
                                        >
                                            <span>&rsaquo;</span>
                                        </label>
                                    </div>
                                </li>
                                <div class="carousel-dots">
                                    <label
                                        for="img-1"
                                        class="carousel-dot"
                                        id="img-dot-1"
                                    ></label>
                                    <label
                                        for="img-2"
                                        class="carousel-dot"
                                        id="img-dot-2"
                                    ></label>
                                    <label
                                        for="img-3"
                                        class="carousel-dot"
                                        id="img-dot-3"
                                    ></label>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-3">
            <div class="section-3-info">
                <h2>Vous n'avez rien à perdre</h2>
                <div>
                    <img
                        src="../../assets/check.png"
                        alt=""
                        srcset=""
                        class="check"
                    />
                    <p>Aucun frais d’inscription</p>
                </div>
                <div>
                    <img
                        src="../../assets/check.png"
                        alt=""
                        srcset=""
                        class="check"
                    />
                    <p>Poster une offre et engager</p>
                </div>
                <div>
                    <img
                        src="../../assets/check.png"
                        alt=""
                        srcset=""
                        class="check"
                    />
                    <p>
                        Travailler avec les meilleurs, tout en respectant votre
                        bugdet
                    </p>
                </div>
                <div class="section-3-btn-container">
                    <button>S'inscrire gratuitement</button>
                </div>
            </div>
            <div class="section-3-img-container">
                <img src="../../assets/benefImg.png" alt="" srcset="" />
            </div>
        </section>
        <section class="section-4">
            <div class="section-4-info">
                <div class="section-4-img-container">
                    <img
                        src="../../assets/entrepriseImgAccueil.png"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="section-4-text">
                    <h2>Pour les Entreprises</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Provident molestias illo, ullam nam deserunt
                        corrupti quae doloribus quia facilis dolore? Iure
                        corporis unde vitae atque magnam laudantium similique
                        eaque molestias.
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
                    <img
                        src="../../assets/clientImgAccueil.jpg"
                        alt=""
                        srcset=""
                    />
                </div>
                <div class="section-5-text">
                    <h2>Pour les Clients</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Provident molestias illo, ullam nam deserunt
                        corrupti quae doloribus quia facilis dolore? Iure
                        corporis unde vitae atque magnam laudantium similique
                        eaque molestias.
                    </p>
                    <div class="section-5-btn-container">
                        <button>Voir plus</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-6">
            <div class="section-6-info">
                <h2>Alors, intéressé?</h2>
                <p>
                    Ne perdez pas de temps et venez vivre une expérience
                    inoubliable.
                </p>
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
                        <img
                            src="../../assets/icons8-mail-50 1.png"
                            alt="mail image"
                    /></a>
                    <a href="">
                        <img
                            src="../../assets/icons8-linkedin-80 1.png"
                            alt="linkedin image"
                    /></a>
                </div>
            </div>
            <hr />
            <p>© Cquired Tous droits réservés</p>
        </div>
    </div>
</template>
<style scoped>
p {
    line-height: 1.6;
}
.container-accueil {
    min-height: 85vh;
    min-width: 100vw;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
/*section 1*/
.loupe {
    width: 40px;
}

.section-1 {
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
.section-1-background {
    width: 100vw;
    height: 85vh;
    position: absolute;
    z-index: 1;

    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    backdrop-filter: blur(13.5px);
    -webkit-backdrop-filter: blur(13.5px);
    border-radius: 10px;
    border: 1px solid rgba(255, 255, 255, 0.18);
}
.section-1-info {
    width: 90vw;
    height: 50vh;

    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;

    background-color: transparent;
}
.section-1-info > h2 {
    font-size: 1.2em;
    font-weight: 600;
}
.section-1-info > h1 {
    font-size: 2em;
    font-weight: 600;
}
.section-1-info > p {
    display: none;
}
.container-search {
    display: flex;
}
.container-search > input {
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    width: 40vw;
}
.container-search > img {
    background-color: #6ec3e7;
    border-top-right-radius: 30px;
    border-bottom-right-radius: 30px;
}
/*section 2*/
.section-2 {
    min-height: 50vh;
    width: 100vw;
    display: flex;
    flex-direction: column;

    align-items: center;
}
.section-2-info {
    height: 100%;
    width: 90%;
}
h2 {
    font-size: 2em;
    font-weight: 600;
}
.section-2-info > p > span {
    color: #6ec3e7;
}
/*carrousel a faire*/
.carousel {
    margin-left: 15%;
    margin-right: 15%;
}

ul.slides {
    display: block;
    position: relative;
    height: 600px;
    margin: 0;
    padding: 0;
    overflow: hidden;
    list-style: none;
}

.slides * {
    user-select: none;
    -ms-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -webkit-touch-callout: none;
}

ul.slides input {
    display: none;
}

.slide-container {
    display: block;
}

.slide-image {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    opacity: 0;
    transition: all 0.7s ease-in-out;
}

.slide-image img {
    width: auto;
    min-width: 100%;
    height: 100%;
}

.carousel-controls {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999;
    font-size: 100px;
    line-height: 600px;
    color: #fff;
}

.carousel-controls label {
    display: none;
    position: absolute;
    padding: 0 20px;
    opacity: 0;
    transition: opacity 0.2s;
    cursor: pointer;
}

.slide-image:hover + .carousel-controls label {
    opacity: 0.5;
}

.carousel-controls label:hover {
    opacity: 1;
}

.carousel-controls .prev-slide {
    width: 49%;
    text-align: left;
    left: 0;
}

.carousel-controls .next-slide {
    width: 49%;
    text-align: right;
    right: 0;
}

.carousel-dots {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 20px;
    z-index: 999;
    text-align: center;
}

.carousel-dots .carousel-dot {
    display: inline-block;
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff;
    opacity: 0.5;
    margin: 10px;
}

input:checked + .slide-container .slide-image {
    opacity: 1;
    transform: scale(1);
    transition: opacity 1s ease-in-out;
}

input:checked + .slide-container .carousel-controls label {
    display: block;
}

input#img-1:checked ~ .carousel-dots label#img-dot-1,
input#img-2:checked ~ .carousel-dots label#img-dot-2,
input#img-3:checked ~ .carousel-dots label#img-dot-3,
input#img-4:checked ~ .carousel-dots label#img-dot-4,
input#img-5:checked ~ .carousel-dots label#img-dot-5,
input#img-6:checked ~ .carousel-dots label#img-dot-6 {
    opacity: 1;
}

input:checked + .slide-container .nav label {
    display: block;
}

/*.carrousel-service{
    height: 200px;
    width: 200px;
    position: relative;
    left: 25%;
    background-color: #AD12C7;
}*/
.section-3 {
    min-height: 150vh;
    width: 100vw;
    display: flex;
    flex-direction: column;

    align-items: center;
    justify-content: center;
}
.section-3-info {
    width: 90%;
    height: 70vh;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.check {
    width: 40px;
    height: 40px;
}
.section-3-info > div {
    display: flex;
    font-weight: 600;
    font-size: 1.2em;
}
.section-3-btn-container {
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-3-info > div > button {
    height: 40px;
    width: 250px;
    background-color: #6ec3e7;
    color: white;
    border-radius: 30px;
}
.section-3-img-container > img {
    height: 300px;
    width: 300px;
}

.section-4 {
    min-height: 100vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-4-info {
    width: 90%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 5px solid black;
    /* border-top-left-radius: 55px;
    border-bottom-left-radius: 55px;*/
}
.section-4-text {
    background-color: #0d094c;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 15px;
    padding-bottom: 15px;
}
.section-4-text > h2,
.section-4-text > p {
    width: 90%;
}
.section-4-btn-container {
    width: 90%;
}
.section-4-btn-container > button {
    height: 40px;
    width: 100px;
    background-color: white;
    color: #63646b;
    border-radius: 30px;
    /*for animation*/
    transition: 0.3s;
}

.section-4-btn-container > button:hover {
    color: white;
    background-color: black;
}

.section-5 {
    padding-top: 50px;
    min-height: 50vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-5-info {
    width: 90%;
    border: 5px solid black;
    /* border-top-right-radius: 55px;
    border-bottom-right-radius: 55px;*/
}
.section-5-text {
    background-color: #ad12c7;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 15px;
    padding-bottom: 15px;
}
.section-5-text > h2,
.section-5-text > p {
    width: 90%;
}
.section-5-btn-container {
    width: 90%;
}
.section-5-btn-container > button {
    height: 40px;
    width: 100px;
    background-color: white;
    color: #63646b;
    border-radius: 30px;
    /*for animation*/
    transition: 0.3s;
}
.section-5-btn-container > button:hover {
    color: white;
    background-color: black;

    border: 1px solid #ad12c7;
}

.section-6 {
    min-height: 50vh;
    width: 100vw;
    display: flex;
    justify-content: center;
    align-items: center;
}
.section-6-info {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
}
.section-6-btn-container {
    width: 100%;
    text-align: center;
}
.section-6-btn-container > button {
    height: 40px;
    width: 100px;
    background-color: white;
    color: #ad12c7;
    border-radius: 30px;
    border: 1px solid #ad12c7;
    /*for animation*/
    transition: 0.3s;
}
.section-6-btn-container > button:hover {
    color: white;
    background-color: #ad12c7;
}

.copyright-footer {
    background-color: #4a5b6b;
    height: 7em;
    padding: 14px 8px;
    width: 100vw;
}
.copyright-footer-section-1 {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 98%;
}
.copyright-footer-section-1 img {
    width: 130px;
    height: 2.2em;
}
.copyright-footer-section-1 > div > a > img {
    width: 35px;
}
.container-footer-img {
    display: flex;
    justify-content: space-between;
}
hr {
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
    .section-1-info > h2 {
        font-size: 1.3em;
    }
    .section-1-info > h1 {
        font-size: 2.1em;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 2em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 2em;
    }
}
@media screen and (min-width: 500px) {
    .section-1-info > h2 {
        font-size: 1.4em;
    }
    .section-1-info > h1 {
        font-size: 2.2em;
        width: 85%;
    }

    /*section 2*/
    .section-2-info > h2 {
        font-size: 2.2em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 2.2em;
    }
}
@media screen and (min-width: 600px) {
    .section-1-info > h2 {
        font-size: 1.5em;
    }
    .section-1-info > h1 {
        font-size: 2.3em;
        width: 72%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 2.4em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 2.4em;
    }
}
@media screen and (min-width: 700px) {
    .section-1-info > h2 {
        font-size: 1.6em;
    }
    .section-1-info > h1 {
        font-size: 3em;
        width: 64%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 2.6em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 2.6em;
    }
    /*section4*/
    .section-4-text > h2 {
        font-size: 2.6em;
    }
    /*section5*/
    .section-5-text > h2 {
        font-size: 2.6em;
    }
}
@media screen and (min-width: 800px) {
    .section-1-info > h2 {
        font-size: 1.7em;
    }
    .section-1-info > h1 {
        font-size: 3.2em;
        width: 57%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 2.8em;
    }
    /*section 3*/
    /*a partir de la que le flex change*/
    .section-3-info > h2 {
        font-size: 2.8em;
    }
    .section-3 {
        display: flex;
        flex-direction: row-reverse;

        align-items: center;
        justify-content: space-around;
    }
    .section-3-btn-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .section-3-info {
        width: 60%;
        height: 70vh;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }
    .section-3-img-container > img {
        height: 400px;
        width: 400px;
    }
    /*section 4*/
    /*a partir de la quon change le flex*/
    /*section4*/
    .section-4-text > h2 {
        font-size: 2.8em;
    }
    .section-4 {
        height: 100vh;
        width: 100vw;
    }
    .section-4-info {
        height: 80%;
        width: 90%;
        display: flex;
        flex-direction: row-reverse;
    }
    .section-4-img-container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .section-4-img-container > img {
        height: 100%;
    }
    .section-4-text {
        height: 100%;
        /*  border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;*/
    }

    /*section 5 a partir de la quon change le flex*/
    /*section5*/
    .section-5-text > h2 {
        font-size: 2.8em;
    }
    .section-5 {
        height: 100vh;
        width: 100vw;
    }
    .section-5-info {
        height: 80%;
        width: 90%;
        display: flex;
        flex-direction: row;
    }
    .section-5-img-container {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .section-5-img-container > img {
        height: 100%;
    }
    .section-5-text {
        height: 100%;
        /* border-top-right-radius: 50px;
        border-bottom-right-radius: 50px;*/
    }
}
@media screen and (min-width: 900px) {
    .section-1-info > h2 {
        font-size: 1.8em;
    }
    .section-1-info > h1 {
        font-size: 3.4em;
        width: 71%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 3em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 3em;
    }
}
@media screen and (min-width: 1000px) {
    .section-1-info > h2 {
        font-size: 1.9em;
    }
    .section-1-info > h1 {
        font-size: 3.5em;
        width: 71%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 3.2em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 3.2em;
    }
}
@media screen and (min-width: 1100px) {
    .section-1-info > h2 {
        font-size: 1.9em;
    }
    .section-1-info > h1 {
        font-size: 3.6em;
        width: 71%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 3.4em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 3.4em;
    }
}
@media screen and (min-width: 1200px) {
    .section-1-info > h2 {
        font-size: 2em;
    }
    .section-1-info > h1 {
        font-size: 3.7em;
        width: 60%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 3.6em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 3.6em;
    }
}
@media screen and (min-width: 1300px) {
    .section-1-info > h2 {
        font-size: 2.1em;
    }
    .section-1-info > h1 {
        font-size: 4em;
        width: 70%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 3.8em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 3.8em;
    }
}
@media screen and (min-width: 1400px) {
    .section-1-info > h2 {
        font-size: 2.2em;
    }
    .section-1-info > h1 {
        font-size: 4.2em;
        width: 75%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 4em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 4em;
    }
}
@media screen and (min-width: 1500px) {
    .section-1-info > h2 {
        font-size: 2.3em;
    }
    .section-1-info > h1 {
        font-size: 4.4em;
        width: 75%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 4.2em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 4.2em;
    }
}
@media screen and (min-width: 1600px) {
    .section-1-info > h2 {
        font-size: 2.4em;
    }
    .section-1-info > h1 {
        font-size: 4.6em;
        width: 80%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 4.4em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 4.4em;
    }
}
@media screen and (min-width: 1700px) {
    .section-1-info > h2 {
        font-size: 2.5em;
    }
    .section-1-info > h1 {
        font-size: 4.8em;
        width: 85%;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 4.6em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 4.6em;
    }
}
@media screen and (min-width: 1800px) {
    .section-1-info > h2 {
        font-size: 2.6em;
    }
    .section-1-info > h1 {
        font-size: 5em;
    }
    /*section 2*/
    .section-2-info > h2 {
        font-size: 4.8em;
    }
    /*section 3*/
    .section-3-info > h2 {
        font-size: 4.8em;
    }
}
@media screen and (min-width: 1900px) {
}
@media screen and (min-width: 2000px) {
}
@media screen and (min-width: 2100px) {
}
</style>
