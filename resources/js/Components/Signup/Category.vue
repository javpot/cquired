<script setup>
import { ref, onMounted } from "vue";

const { submit } = defineProps(["submit"]);

const handleRoleSelection = (role) => {
    try {
        submit(role, "Type");
    } catch (error) {
        console.error("Error submitting role choice:", error);
    }
};

const scalingDivRef = ref(null);

onMounted(() => {
    const scalingDiv = scalingDivRef.value;
    scalingDiv.addEventListener("animationend", () => {
        scalingDiv.classList.remove("animate-scale-0");
    });
});
</script>

<template>
    <div class="h-8 bg-sky-300 w-2/5 absolute z-20 animate-scale-0"></div>
    <div class="h-8 bg-stone-300 w-screen relative z-10"></div>

    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div
            class="w-1/2 h-2/3 bg-white flex flex-col items-center justify-evenly shadow-md border-2"
        >
            <h1 class="text-center text-3xl">Choose your role</h1>
            <div class="flex flex-row justify-evenly space-x-8">
                <div
                    class="border-2 border-gray-300 p-4 flex flex-col items-center"
                    @click="handleRoleSelection('Freelancer')"
                >
                    <img
                        src="../../../assets/checkmarkblue.png"
                        alt=""
                        class="check-blue hidden"
                    />
                    <img
                        src="../../../assets/Group 4670.png"
                        alt=""
                        class="w-40 h-25"
                    />
                    <p class="text-center text-xl mt-4">Freelancer</p>
                </div>
                <div
                    class="border-2 border-gray-300 p-4 flex flex-col items-center"
                    @click="handleRoleSelection('Agency')"
                >
                    <img
                        src="../../../assets/checkmarkblue.png"
                        alt=""
                        class="check-blue hidden"
                    />
                    <img
                        src="../../../assets/Group 4670.png"
                        alt=""
                        class="w-40 h-25"
                    />
                    <p class="text-center text-xl mt-4">Agency</p>
                </div>
                <div
                    class="border-2 border-gray-300 p-4 flex flex-col items-center"
                    @click="handleRoleSelection('Client')"
                >
                    <img
                        src="../../../assets/checkmarkblue.png"
                        alt=""
                        class="check-blue hidden"
                    />
                    <img
                        src="../../../assets/Group 4241.png"
                        alt=""
                        class="w-40 h-25"
                    />
                    <p class="text-center text-xl mt-4">Client</p>
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
