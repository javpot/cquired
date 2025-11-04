<script setup>
import Credentials from "@/Components/Signup/Credentials.vue";
import Category from "@/Components/Signup/Category.vue";
import Location from "@/Components/Signup/Location.vue";
import Domain from "@/Components/Signup/Domain.vue";
import Forfait from "@/Components/Signup/Forfait.vue";
import Speciality from "@/Components/Signup/Speciality.vue";
import { ref, onMounted } from "vue";
import axios from "axios";
import { router } from "@inertiajs/vue3"; // ✅ import correct pour Vue 3

let properties = ref({
    category: null,
    location: null,
    domain: null,
    forfait: null,
    status: "available",
    picture: "public/profile_images/pfp-icon.png",
    banner: "public/banner_images/clientImgAccueil.jpg",
    saved: { saved: [] },
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

const getGoogleData = async () => {
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

const login = async (redirect) => {
    try {
        const response = await axios.post("/register", {
            name: properties.value.name,
            email: properties.value.email,
            password: properties.value.password ?? null,
            password_confirmation:
                properties.value.password_confirmation ?? null,
            google_id: properties.value.google_id ?? null,
            category: properties.value.category ?? null,
        });

        if ((response.status === 200 || response.status === 201) && redirect) {
            console.log("SUCCEEDED");
            router.visit(route("dashboard"));
        }
    } catch (error) {
        if (error.response) {
            console.error("Erreur backend:", error.response.data);
        } else if (error.request) {
            console.error("Aucune réponse du serveur:", error.request);
        } else {
            console.error("Erreur axios:", error.message);
        }
    }
};

const createEntity = async (category) => {
    try {
        let path = category == "Client" ? "clients" : "agencies";
        await axios.post(path, properties.value);
    } catch (error) {
        console.error(error.response?.data || error);
    }
};

const checkout = () => {
    try {
        window.location.href = route("subscription", {
            plan: properties.value.forfait,
        });
    } catch (error) {
        console.error(error);
    }
};

const handleSubmit = async (data, source) => {
    switch (source) {
        case "Credentials":
            properties.value = { ...properties.value, ...data };
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
            if (properties.value.category !== "Client") {
                currentStep.value = "Speciality";
            } else {
                await createEntity("Client");
                await login(true);
            }
            break;
        case "Speciality":
            properties.value.specialty = data;
            currentStep.value = "Forfait";
            break;
        case "Forfait":
            properties.value.forfait = data;
            await createEntity("");
            await login(false);
            checkout();
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
        <Speciality
            v-if="currentStep === 'Speciality'"
            :submit="handleSubmit"
        />
        <Forfait v-if="currentStep === 'Forfait'" :submit="handleSubmit" />
    </div>
</template>
