<script setup>
import CancelPost from "@/Components/CancelPost.vue";
import TextInput from "@/Components/TextInput.vue";
import DomainListDropdown from "@/Components/DomainListDropdown.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

const user = usePage().props.auth.user;

const imageFile = ref(null);
const imageName = ref("");

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

const createPost = () => {
    saveImage();
};
</script>
<template>
    <CancelPost class="fixed top-4 left-4" />
    <div class="flex items-center justify-center h-screen">
        <div class="flex flex-col space-y-6 border border-4 p-8">
            <h2 class="text-3xl text-center">Write a Post</h2>
            <TextInput class="" placeholder="Title" />
            <DomainListDropdown class="" />
            <textarea
                name="Description"
                id="Description"
                placeholder="Description"
                cols="80"
                rows="10"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            ></textarea>
            <div class="flex flex-row items-center">
                <input
                    class="hidden"
                    type="file"
                    accept="image/png, image/jpeg"
                    @change="handleFileChange"
                    ref="fileInput"
                />
                <PrimaryButton @click="$refs.fileInput.click()"
                    >Choose</PrimaryButton
                >
                <p class="ml-4">add an image (optional)</p>
            </div>
            <PrimaryButton class="self-center" type="submit" @click="createPost"
                >Post</PrimaryButton
            >
        </div>
    </div>
</template>
