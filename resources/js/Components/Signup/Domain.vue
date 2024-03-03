<script setup>
import DomainButton from "@/Components/DomainButton.vue";
import { inject } from "vue";
const { submit } = defineProps(["submit"]);

const handleDomainSelection = (domain) => {
    try {
        submit(domain, "Domain");
    } catch (error) {
        console.error("Error submitting domain choice:", error);
    }
};
const domains = inject("domains");

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
    <div class="h-8 bg-sky-300 w-3/5 absolute z-20 animate-scale-0"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div
            class="w-1/2 h-2/3 bg-white flex flex-col items-center justify-between shadow-md border-2"
        >
            <h2 class="text-3xl text-center font-bold my-10">
                Choose your domain
            </h2>
            <div
                class="h-full w-full flex flex-col justify-evenly items-center"
            >
                <div
                    class="h-1/2 w-4/5 flex flex-row flex-wrap justify-center items-center gap-4"
                >
                    <DomainButton
                        v-for="(service, index) in domains"
                        :key="index"
                        @click="handleDomainSelection(service)"
                        :title="service"
                    />
                </div>

                <!-- <button class="h-12 w-1/2 bg-sky-300 text-center rounded-xl">
                    Continue
                </button> -->
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
