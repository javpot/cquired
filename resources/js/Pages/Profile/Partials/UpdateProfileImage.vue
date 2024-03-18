<script setup>
import DangerButton from "@/Components/DangerButton.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import axios from "axios";
import { ref } from "vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";
import InputError from "@/Components/InputError.vue";

const user = usePage().props.auth.user;
const imageFile = ref(null);
const imageName = ref("");
const picturePath = ref("");

const wasSent = ref(false);
const wasRemoved = ref(false);

onMounted(() => {
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
            wasRemoved.value = true;
        } else {
            await axios.delete("/agency-profile/picture");
            wasRemoved.value = true;
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
        const formData = new FormData();
        formData.append("picture", imageFile.value);

        try {
            if (user.category === "Client") {
                await axios.post("/client-profile/picture", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });
                wasSent.value = true;
            } else {
                await axios.post("/agency-profile/picture", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                });
                wasSent.value = true;
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
            <span class="flex flex-col">
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
                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="wasSent"
                        class="text-sm text-right text-gray-600 mt-2"
                    >
                        Saved.
                    </p>
                </Transition>
                <Transition
                    enter-active-class="transition ease-in-out"
                    enter-from-class="opacity-0"
                    leave-active-class="transition ease-in-out"
                    leave-to-class="opacity-0"
                >
                    <p
                        v-if="wasRemoved"
                        class="text-sm text-right text-gray-600 mt-2"
                    >
                        Removed.
                    </p>
                </Transition>
            </span>
        </div>
    </section>
</template>
