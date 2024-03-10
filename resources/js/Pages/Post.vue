<script setup>
import CancelPost from "@/Components/CancelPost.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { useForm, usePage } from "@inertiajs/vue3";
import { inject, ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

const client = usePage().props.auth.client;
const domains = inject("domains");
const form = useForm({
    titre: "",
    domain: client.domain,
    status: "unresolved",
    description: "",
    client_id: client.id,
}); // maybe add images after

const createPost = async () => {
    try {
        await axios.post("posts", form);
        Inertia.visit(route("client-profile"));
    } catch (error) {
        console.error(error.response.data);
    }
};
</script>

<template>
    <CancelPost class="fixed top-4 left-4" />
    <div class="flex items-center justify-center h-screen">
        <form @submit.prevent="createPost">
            <div class="flex flex-col space-y-6 border-4 p-8">
                <h2 class="text-3xl text-center">Write a Post</h2>
                <TextInput class="" placeholder="Title" v-model="form.titre" />
                <div class="">
                    <select
                        name="domain"
                        id="domain"
                        v-model="form.domain"
                        class="w-80 p-2 rounded-md focus:outline-none ease-in-out"
                    >
                        <option
                            v-for="domain in domains"
                            :key="domain"
                            :value="domain"
                        >
                            {{ domain }}
                        </option>
                    </select>
                </div>
                <textarea
                    name="Description"
                    id="Description"
                    placeholder="Description"
                    cols="80"
                    rows="10"
                    required
                    v-model="form.description"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                ></textarea>
                <!-- <div class="flex flex-row items-center">
                    <p class="ml-4">add an image (optional)</p>
                </div> -->
                <InputError class="mt-2" :message="form.errors.domain" />
                <PrimaryButton
                    class="self-center"
                    type="submit"
                    :disabled="form.processing"
                    >Post</PrimaryButton
                >
            </div>
        </form>
    </div>
</template>
