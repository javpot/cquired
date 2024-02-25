<script setup>
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";

import { ref } from "vue";

const imageFile = ref(null);
const imageName = ref("");

const removeImage = () => {
    // Implement logic to remove the image
    // You may want to reset both imageFile and imageName

    // here we would have to send a delete request to the database

    imageFile.value = null;
    imageName.value = "";
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

    // Perform any additional handling if needed
};

const saveImage = () => {
    // Access the image file and name from the refs
    const file = imageFile.value;
    const fileName = imageName.value;

    if (file && fileName) {
        // Perform any additional handling here if needed
        // For now, let's just log the filename and file to the console
        console.log("File to be saved:", fileName);
        console.log("Image:", file);
    } else {
        alert("Please choose an image first.");
    }
};
</script>

<template>
    <section class="flex flex-col">
        <header class="flex flex-col">
            <h2 class="text-lg font-medium text-gray-900">Profile Banner</h2>
            <p class="mt-1 text-sm text-gray-600">
                Update your account's profile banner.
            </p>
        </header>

        <div class="w-full flex flex-row items-center">
            <img
                class="w-32 h-20 mt-2"
                src="../../../../assets/entrepriseImgAccueil.png"
                alt=""
            />
            <p class="w-80 ml-4 text-sm text-gray-600">
                PNG and JPEG under 15mb.
            </p>

            <div class="flex flex-row-reverse gap-4 w-full items-center">
                <DangerButton @click="removeImage">Remove</DangerButton>
                <PrimaryButton type="submit" @click="saveImage"
                    >Save</PrimaryButton
                >
                <input
                    class="w-60 hidden"
                    type="file"
                    accept="image/png, image/jpeg"
                    @change="handleFileChange"
                    ref="fileInput"
                />
                <PrimaryButton @click="$refs.fileInput.click()"
                    >Choose</PrimaryButton
                >
            </div>
        </div>
    </section>
</template>
