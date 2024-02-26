<script setup>
import ForfaitCardVue from "@/Components/ForfaitCard.vue";

const { submit } = defineProps(["submit"]);

const handleSubmit = (forfait) => {
    try {
        submit(forfait, "Credentials");
    } catch (error) {
        console.error("Error submitting form:", error);
    }
};
</script>

<template>
    <div class="w-screen h-screen flex flex-col justify-center items-center">
        <div class="w-full h-full bg-white flex flex-col shadow-md">
            <div class="h-8 bg-sky-300 w-4/5 relative z-20"></div>
            <div class="h-8 bg-stone-300 w-full absolute z-10"></div>
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
                        onclick='handleSubmit("start")'
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
                        onclick='handleSubmit("basic")'
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
                        onclick='handleSubmit("business")'
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
                        onclick='handleSubmit("enterprise")'
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
