<script setup>
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import axios from "axios";
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";

const user = usePage().props.auth.user;
const imageFile = ref(null);
const imageName = ref("");
const picturePath = ref("");

onMounted(async () => {
    let loadedPicture;
    try {
        if (user.category === "Client") {
            let client = usePage().props.auth.client;
            loadedPicture = client.picture;
        } else {
            let agency = usePage().props.auth.agency;
            loadedPicture = agency.picture;
        }
    } catch (error) {
        console.error("Error loading image:", error);
    }
    picturePath.value = loadedPicture;
});

const removeImage = async () => {
    imageFile.value = null;
    imageName.value = "";

    try {
        if (user.category === "Client") {
            await axios.delete("/client-profile/picture");
        } else {
            await axios.delete("/agency-profile/picture");
        }
    } catch (error) {
        console.error("Error deleting picture:", error);
    }
};

const handleFileChange = (event) => {
    const selectedFile = event.target.files[0];

    if (selectedFile) {
        // Set the image file and name
        imageFile.value = selectedFile;
        imageName.value = selectedFile.name;
    } else {
        // Reset if no file is selected
        imageFile.value = null;
        imageName.value = "";
        // alert("Please choose an image first.");
    }
};

const saveImage = async () => {
    if (imageFile.value && imageName.value) {
        // Create a FormData object and append the image file
        const formData = new FormData();
        formData.append("picture", imageFile.value);

        try {
            if (user.category === "Client") {
                await axios.post("/client-profile/picture", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });
            } else {
                await axios.post("/agency-profile/picture", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });
            }
        } catch (error) {
            console.error("Error uploading image:", error);
        }
    } else {
        alert("Please choose an image first.");
    }
};
</script>

<template>
    <section class="flex flex-col">
        <header class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900">Profile Picture</h2>
            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile picture.
            </p>
        </header>

        <div class="w-full flex flex-row items-center justify-between">
            <span class="flex flex-row items-center">
                <img
                    id="picture"
                    class="w-20 h-20 mt-2"
                    :src="picturePath"
                    alt=""
                />
                <p class="w-80 ml-4 text-sm text-gray-600">
                    PNG and JPEG under 4mb.
                </p>
            </span>
            <div class="flex flex-row">
                <form
                    @submit.prevent="saveImage"
                    method="post"
                    class="flex flex-row-reverse gap-4 items-center"
                    enctype="multipart/form-data"
                >
                    <PrimaryButton type="submit">Save</PrimaryButton>
                    <input
                        class="w-60"
                        type="file"
                        accept="image/png, image/jpeg"
                        @change="handleFileChange"
                        ref="fileInput"
                        name="picture"
                    />
                </form>
                <DangerButton class="ml-4" @click="removeImage"
                    >Remove</DangerButton
                >
            </div>
        </div>
    </section>
</template>
