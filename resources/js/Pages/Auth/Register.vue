<script setup>
import Credentials from "@/Components/Signup/Credentials.vue";
import Category from "@/Components/Signup/Category.vue";
import Location from "@/Components/Signup/Location.vue";
import Domain from "@/Components/Signup/Domain.vue";
import Forfait from "@/Components/Signup/Forfait.vue";
import { ref, onMounted } from "vue";
import axios from "axios";
import { Inertia } from "@inertiajs/inertia";
import { InertiaProgress } from "@inertiajs/progress";

let properties = ref({
    category: null,
    location: null,
    domain: null,
    forfait: null,
    status: "available",
});
let currentStep = ref("Credentials");
let userData = ref(null);
let googleDataUsed = false;

onMounted(async () => {
    await getGoogleData();

    if (userData.value != null) {
        properties.value = { ...properties.value, ...userData.value };
        currentStep.value = "Type";
    }
});

let getGoogleData = async () => {
    try {
        if (!googleDataUsed) {
            const response = await axios.get("/get-user-data");
            if (response.data.name !== undefined) {
                userData.value = response.data;
                googleDataUsed = true;
            }
        }
    } catch (error) {
        console.error("Error fetching Google data:", error);
    }
};

let login = async (redirect) => {
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

        if (response.status == 200 && redirect) {
            console.log("SUCCEEEDED");
            Inertia.visit(route("dashboard"));
        }
    } catch (error) {
        console.error(error.response.data);
    }
};

let createEntity = async (category) => {
    try {
        let path = category == "Client" ? "clients" : "agencies";

        await axios.post(path, properties.value);
    } catch (error) {
        console.error(error.response.data);
    }
};

let checkout = async () => {
    try {
        await Inertia.visit(route(`subscription-${properties.value.forfait}`));
    } catch (error) {
        console.error(error);
    }
};

let handleSubmit = async (data, source) => {
    switch (source) {
        case "Credentials":
            const newData = { name: data.name, email: data.email };
            properties.value = { ...properties.value, ...newData };
            currentStep.value = "Type";
            break;
        case "Type":
            properties.value.category = data;
            currentStep.value = "Domain";
            break;
        case "Domain":
            properties.value.domain = data;
            currentStep.value = "Location";
            break;
        case "Location":
            properties.value.location = data;
            if (properties.value.category != "Client") {
                currentStep.value = "Forfait";
            } else {
                await createEntity("Client");
                await login(true);
            }
            break;
        case "Forfait":
            properties.value.forfait = data;
            await createEntity("");
            await login(false);
            await checkout();
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
