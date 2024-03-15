<script setup>
import ForfaitCardVue from "@/Components/ForfaitCard.vue";

import { ref, onMounted } from "vue";

const { submit } = defineProps(["submit"]);

const handleSubmit = (forfait) => {
    try {
        submit(forfait, "Forfait");
    } catch (error) {
        console.error("Error submitting form:", error);
    }
};
/*
const scalingDivRef = ref(null);

onMounted(() => {
    const scalingDiv = scalingDivRef.value;
    scalingDiv.addEventListener("animationend", () => {
        scalingDiv.classList.remove("animate-scale-0");
    });
});
*/
</script>

<template>
    <div class="h-8 bg-sky-300 w-4/5 absolute z-20 animate-scale-0"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div class="w-full h-full bg-white flex flex-col shadow-md">
            <p class="text-3xl text-center font-bold mt-10">Subscriptions</p>

            <div
                class="h-4/5 w-full flex flex-column justify-evenly items-center"
            >
                <div
                    class="flex flex-row h-4/5 w-full gap-4 justify-around items-center"
                >
                    <ForfaitCardVue
                        title="Starter"
                        :price="0"
                        description="Join
                    our Starter plan"
                        :onclick="() => handleSubmit('starter')"
                        :features="[
                            'visible limit of 25 clients',
                            'search feature',
                            '',
                            '',
                        ]"
                    />
                    <ForfaitCardVue
                        title="Basic"
                        :price="19.99"
                        description="Join
                    our Basic plan"
                        :onclick="() => handleSubmit('basic')"
                        :features="[
                            'visible limit of 50 clients',
                            'search feature',
                            '',
                            '',
                        ]"
                    />
                    <ForfaitCardVue
                        title="Business"
                        :price="39.99"
                        description="Join
                    our Business plan"
                        :onclick="() => handleSubmit('business')"
                        :features="[
                            'visible limit of 75 people',
                            'search feature',
                            '',
                            '',
                        ]"
                    />

                    <ForfaitCardVue
                        title="Enterprise"
                        :price="69.99"
                        description="Join
                    our Enterprise plan"
                        :onclick="() => handleSubmit('enterprise')"
                        :features="[
                            'unlimited number of clients',
                            'search feature',
                            '',
                            '',
                        ]"
                    />
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* Custom styles can be added here */
@keyframes scaleAnimation {
    0% {
        transform: scaleX(0);
        transform-origin: left;
        /* Start the animation from the left */
    }

    100% {
        transform: scaleX(1);
        transform-origin: left;
        /* End the animation at the right */
    }
}

.animate-scale-0 {
    animation: scaleAnimation 2s forwards;
    /* Adjust the duration as needed */
}
</style>
