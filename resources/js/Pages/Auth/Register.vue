<script setup>
import Credentials from "@/Components/Signup/Credentials.vue";
import Category from "@/Components/Signup/Category.vue";
import Location from "@/Components/Signup/Location.vue";
import Domain from "@/Components/Signup/Domain.vue";
import Forfait from "@/Components/Signup/Forfait.vue";
import { ref, onMounted } from "vue";
import axios from "axios";

let properties = ref({
    type: null,
    location: null,
    domain: null,
    forfait: null,
});

let currentStep = ref("Credentials");

let userData = ref(null);

onMounted(async () => {
    console.log("Before: ", userData.value);
    await getGoogleData();
    console.log("After: ", userData.value);
    if (userData.value != null) {
        properties.value = { ...properties.value, ...userData.value };
        currentStep.value = "Type";
    }
});

let getGoogleData = async () => {
    try {
        const response = await axios.get("/get-user-data");
        console.log(response.data);
        userData.value = response.data;
    } catch (error) {
        console.error(error.response.data);
    }
};

let login = async () => {
    try {
        let response = await axios.post("/register", {
            name: properties.value.name,
            email: properties.value.email,
            password: properties.value.password
                ? properties.value.password
                : null,
            password_confirmation: properties.value.password_confirmation
                ? properties.value.password_confirmation
                : null,
            google_id: properties.value.google_id
                ? properties.value.google_id
                : null,
        });

        if (response.data.success) {
            route({ name: "dashboard" });
        }
    } catch (error) {
        console.error(error.response.data);
    }
};

let createEntity = async (type) => {
    try {
        let path = type == "Client" ? "clients" : "agencies";

        await axios.post(path, properties.value);
    } catch (error) {
        console.error(error.response.data);
    }
};

let handleSubmit = async (data, source) => {
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
            } else {
                await createEntity("Client");
                await login();
            }
            break;
        case "Forfait":
            properties.value.forfait = data;
            await createEntity("");
            await login();
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
        <Category v-if="currentStep === 'Type'" :submit="handleSubmit" />
        <Domain v-if="currentStep === 'Domain'" :submit="handleSubmit" />
        <Location v-if="currentStep === 'Location'" :submit="handleSubmit" />
        <Forfait v-if="currentStep === 'Forfait'" :submit="handleSubmit" />
    </div>
</template>
