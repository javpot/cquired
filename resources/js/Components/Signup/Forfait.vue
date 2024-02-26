<script setup>
import ForfaitCardVue from "@/Components/ForfaitCard.vue";

import { ref, onMounted } from "vue";

const scalingDivRef = ref(null);

onMounted(() => {
    const scalingDiv = scalingDivRef.value;
    scalingDiv.addEventListener("animationend", () => {
        scalingDiv.classList.remove("animate-scale-0");
    });
});
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
                    class="flex flex-row flex-wrap h-4/5 w-full gap-4 justify-around"
                >
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

        </div>
    </div>
</template>

<style scoped>
/* Custom styles can be added here */
@keyframes scaleAnimation {
    0% {
        transform: scaleX(0);
        transform-origin: left; /* Start the animation from the left */
    }
    100% {
        transform: scaleX(1);
        transform-origin: left; /* End the animation at the right */
    }
}

.animate-scale-0 {
    animation: scaleAnimation 2s forwards; /* Adjust the duration as needed */
}
</style>
