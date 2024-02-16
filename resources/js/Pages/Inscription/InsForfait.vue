<script>
import ForfaitCardVue from "@/Components/ForfaitCard.vue";

export default {
    data() {
        return {};
    },
    components: { ForfaitCardVue },
};
</script>

<template>
    <div
        class="container-inscription-section-1 flex flex-column justify-center items-center"
    >
        <div class="model-client-freelancer">
            <div class="progress-bar"></div>
            <div class="progress-bar-1"></div>
            <h2 class="text-xl text-center w-1/5">Subscriptions</h2>

            <div class="model-client-freelancer-info">
                <div class="flex flex-row">
                    <ForfaitCardVue
                        title="Starter"
                        price="0.00"
                        description="Join
                    our Starter plan"
                        :features="[
                            'limite of 25 people',
                            'limite of 25 messages',
                            'search feature',
                            'messaging feature',
                        ]"
                    />
                    <ForfaitCardVue
                        title="Basic"
                        price="19.99"
                        description="Join
                    our Basic plan"
                        :features="[
                            'limite of 25 people',
                            'limite of 25 messages',
                            'limite of 25 messages',
                            'limite of 25 messages',
                        ]"
                    />
                    <ForfaitCardVue
                        title="Business"
                        price="39.99"
                        description="Join
                    our Business plan"
                        :features="[
                            'limite of 25 people',
                            'limite of 25 messages',
                            'limite of 25 messages',
                            'limite of 25 messages',
                        ]"
                    />
                    <ForfaitCardVue
                        title="Enterprise"
                        price="69.99"
                        description="Join
                    our Enterprise plan"
                        :features="[
                            'special icon',
                            'limite of 25 messages',
                            'limite of 25 messages',
                            'limite of 25 messages',
                        ]"
                    />
                </div>
            </div>

            <!--<button class="continue-btn">Continue</button>-->
        </div>
    </div>
</template>

<style scoped>
.ligne {
    height: 2px;
    width: 80%;
    position: relative;
    left: 10%;
    background-color: black;
}
li {
    list-style-type: none;
    margin-left: 10%;
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
    width: 75%;
    background-color: #6ec3e7;
    position: relative;
    bottom: 0.6%;
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
    height: 90%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}
.model-client-freelancer-info > div {
    height: 80%;
    width: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: space-around;
    align-items: center;
}
.card-subscription {
    height: 100%;
    width: 20%;

    background-color: #fff;
    border-radius: 10px;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;

    display: flex;
    justify-content: center;
    align-items: center;
}

.card-content {
    height: 95%;
    width: 92%;
    display: flex;
    flex-direction: column;
    border-radius: 10px;
    justify-content: space-around;
    padding: 10px;
}

h2 {
    font-size: 25px;
}

h3 {
    font-size: 18px;
}

.card-content p {
    font-size: 20px;
}

.amount {
    font-size: 40px;
    color: black;
}
.money {
    font-size: 30px;
    color: black;
}

.button {
    width: 90%;
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
        width: 95%;
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
        height: 5%;
        width: 75%;
        background-color: #6ec3e7;
        position: relative;
        bottom: 0.3%;
        z-index: 2;
    }
    .progress-bar-1 {
        height: 5%;
        width: 100%;
        background-color: #d9d9d9;
        position: relative;
        bottom: 5%;
        z-index: 1;
    }
}
</style>
