<script setup>
import Credentials from "@/Components/Signup/Credentials.vue";
import Type from "@/Components/Signup/Type.vue";
import { ref } from "vue";

let properties = ref({ type: "" });
let currentStep = ref("Credentials");

let handleSubmit = (data, source) => {
    switch (source) {
        case "Credentials":
            properties.value = { ...properties.value, ...data };
            currentStep.value = "Type";
            break;
        case "Type":
            properties.value = data;
            currentStep.value = "Domain";
            break;
        case "Domain":
            properties.value = data;
            currentStep.value = "Location";
            break;
        case "Location":
            properties.value = data;
            if (properties.value.type != "Client") {
                currentStep.value = "Forfait";
            }
            //Create USER HERE
            //Create new CLIENT HERE
            break;
        case "Forfait":
            properties.value.type = data;
            //Create USER HERE
            //Create new AGENCY HERE
            break;
    }
    console.log(properties.value);
};
</script>

<template>
    <div>
        <Credentials
            v-if="currentStep === 'Credentials'"
            :submit="handleSubmit"
        />
        <Type v-if="currentStep === 'Type'" :submit="handleSubmit" />
        <!-- CONFIGURE OTHER STEPS -->
    </div>
</template>
