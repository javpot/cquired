<script setup>
import DomainButton from "@/Components/DomainButton.vue";
</script>

<template>
    <div class="h-8 bg-sky-300 w-3/5 absolute z-20"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div
            class="w-1/2 h-2/3 bg-white flex flex-col items-center justify-around shadow-md border-2"
        >
            <h2 class="text-3xl text-center my-10">Domain</h2>
            <div class="h-90 w-full flex flex-col justify-evenly items-center">
                <div
                    class="h-1/2 w-4/5 flex flex-row flex-wrap justify-center items-center gap-4"
                >
                    <DomainButton title="Developpement Web" />
                    <DomainButton title="Intelligence Artificiel" />
                    <DomainButton title="Montage Video" />
                    <DomainButton title="Jeux Video" />
                    <DomainButton title="SEO" />
                    <DomainButton title="Effets Speciauxs" />
                </div>

                <button class="h-12 w-1/2 bg-sky-300 text-center rounded-xl">
                    Continue
                </button>
            </div>
        </div>
    </div>
</template>

<style scoped>
.h-90 {
    height: 90vh;
}

.w-90 {
    width: 90vw;
}

.container-inscription-section-1 {
    height: 90vh;
    width: 100vw;
}

.model-client-freelancer {
    height: 90%;
    width: 90%;
    background-color: white;
    display: flex;
    flex-direction: column;

    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}

.progress-bar {
    height: 5%;
    width: 40%;
    background-color: #6ec3e7;
    position: relative;
    z-index: 2;
}

.progress-bar-1 {
    height: 5%;
    width: 100%;
    background-color: #d9d9d9;
    position: relative;
    bottom: 4.5%;
    z-index: 1;
}

.model-client-freelancer-info {
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
}

.model-client-freelancer-info > div {
    height: 50%;
    width: 80%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
    align-items: center;
}

img {
    height: 100px;
    width: 150px;
}

.check-blue {
    height: 50px;
    width: 50px;
    position: relative;
    left: 80px;
    top: 100px;
    display: none;
}

.selection-btn {
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

.selection-btn:hover {
    border: 1px solid #6ec3e7;
    color: #6ec3e7;
}

.continue-btn {
    height: 50px;
    width: 50%;
    background-color: #6ec3e7;
    text-align: center;
    border-radius: 30px;
    color: black;
}

@media screen and (min-width: 900px) {
    .container-inscription-section-1 {
        height: 90vh;
        width: 100vw;
    }

    .model-client-freelancer {
        height: 90%;
        width: 60%;
        background-color: white;
        display: flex;
        flex-direction: column;

        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    input {
        width: 100%;
    }

    .model-client-freelancer-info {
        height: 90%;
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
    }

    img {
        height: 150px;
        width: 200px;
    }

    .progress-bar {
        width: 60%;
        background-color: #6ec3e7;
        position: relative;
        bottom: 0.3%;
        z-index: 2;
    }

    .progress-bar-1 {
        width: 100%;
        background-color: #d9d9d9;
        position: relative;
        bottom: 5%;
        z-index: 1;
    }
}
</style>
