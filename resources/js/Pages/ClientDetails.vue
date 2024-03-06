<script setup>
import SegmentedControl from "@/Components/SegmentedControl.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";

const client = usePage().props.auth.client;
const posts = ref([]);
const clientPosts = ref([]);
let picturePath = client.picture;
let bannerPath = client.banner;

onMounted(async () => {
    posts.value = await getPosts();
    clientPosts.value = posts.value.filter(
        (post) => post.client_id === client.id
    );
});

async function getPosts() {
    try {
        const response = await axios.get("/posts");
        // Gérer la réponse ici, par exemple, afficher le domain dans la console
        console.log(response.data.Posts);
        return response.data.Posts;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}
</script>

<template>
    <AuthenticatedLayout class="w-screen absolute z-50">
        <section
            class="flex flex-col w-screen h-screen z-40 relative items-center bg-white"
        >
            <img
                class="flex w-full h-96 z-40 absolute"
                :src="bannerPath"
                alt=""
            />
            <img
                class="w-40 h-40 z-50 border-8 border-white rounded-full bg-white relative top-80 self-center"
                :src="picturePath"
                alt=""
            />
            <div class="flex flex-col w-full z-50 top-80 relative items-center">
                <div class="flex flex-col my-4 space-y-4">
                    <h2 class="text-3xl text-center">{{ client.name }}</h2>
                    <h3 class="text-center">{{ client.location }}</h3>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h2 class="text-center text-xl">
                        {{ clientPosts.length }}
                    </h2>
                    <h2 class="uppercase">Posts</h2>
                </div>
                <SegmentedControl
                    class="flex flex-col items-center"
                    :clientposts="clientPosts"
                    :clientdata="client"
                />
            </div>
        </section>
    </AuthenticatedLayout>
</template>
