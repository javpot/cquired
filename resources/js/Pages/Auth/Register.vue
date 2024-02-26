<script setup>
import Credentials from "@/Components/Signup/Credentials.vue";
import Category from "@/Components/Signup/Category.vue";
import Location from "@/Components/Signup/Location.vue";
import Domain from "@/Components/Signup/Domain.vue";
import { ref } from "vue";

const submit = () => {
    form.post(route("register"));
};

let properties = ref({ type: "", location: "", domain: "", forfait: "" });
let currentStep = ref("Credentials");

let handleSubmit = (data, source) => {
    switch (source) {
        case "Credentials":
            properties.value = { ...properties.value, ...data };
            currentStep.value = "Type";
            break;
        case "Type":
            properties.value.type = data;
            currentStep.value = "Domain";
            break;
        case "Domain":
            properties.value.domain = data;
            currentStep.value = "Location";
            break;
        case "Location":
            properties.value.location = data;
            if (properties.value.type != "Client") {
                currentStep.value = "Forfait";
            }
            //Create USER HERE
            //Create new CLIENT HERE
            break;
        case "Forfait":
            properties.value.forfait = data;
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
        <Location v-if="currentStep === 'Location'" :submit="handleSubmit" />
        <Domain v-if="currentStep === 'Domain'" :submit="handleSubmit" />
        <Forfait v-if="currentStep === 'Forfait'" :submit="handleSubmit" />
        <!-- CONFIGURE OTHER STEPS -->
    </div>
</template>
