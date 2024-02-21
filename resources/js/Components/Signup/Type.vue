<script setup>
const { submit } = defineProps(["submit"]);

const handleRoleSelection = (role) => {
    try {
        submit(role, "Type");
    } catch (error) {
        console.error("Error submitting role choice:", error);
    }
};
</script>

<template>
    <div class="h-screen w-screen flex items-center justify-center">
        <div
            class="model-client-freelancer bg-white w-90 h-90 flex flex-col shadow-lg"
        >
            <div class="progress-bar h-5 w-20 bg-blue-500 relative z-10"></div>
            <div
                class="progress-bar-1 h-5 w-full bg-gray-300 relative bottom-4.5% z-0"
            ></div>
            <h1 class="text-center text-3xl">Choose your role</h1>
            <div class="model-client-freelancer-info flex justify-around">
                <div
                    class="border-4 border-gray-300 p-4 flex flex-col items-center"
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
                        class="w-32 h-20"
                    />
                    <p class="text-center text-xl">Freelancer</p>
                </div>
                <div
                    class="border-4 border-gray-300 p-4 flex flex-col items-center"
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
                        class="w-32 h-20"
                    />
                    <p class="text-center text-xl">Agency</p>
                </div>
                <div
                    class="border-4 border-gray-300 p-4 flex flex-col items-center"
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
                        class="w-32 h-20"
                    />
                    <p class="text-center text-xl">Client</p>
                </div>
            </div>
        </div>
    </div>
</template>
