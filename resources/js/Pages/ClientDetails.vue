<script setup>
import PostCard from "@/Components/PostCard.vue";
import SegmentedControl from "@/Components/SegmentedControl.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ComposeMessage from "@/Components/ComposeMessage.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";

const client = usePage().props.auth.client;
const posts = ref([]);
const clientPosts = ref([]);

onMounted(async() => {
    posts.value = await getPosts();
    clientPosts.value = posts.value.filter((post) => post.client_id === client.id)

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
    <AuthenticatedLayout class="absolute z-50">
        <section
            class="flex flex-col w-full h-full z-40 relative items-center bg-white"
        >
            <img
                class="flex w-full h-96 z-40 absolute"
                src="../../assets/entrepriseImgAccueil.png"
                alt=""
            />
            <img
                class="w-40 h-40 z-50 border-8 border-white rounded-full bg-white relative top-80 self-center"
                src="../../assets/pfp-icon.png"
                alt=""
            />
            <div class="flex flex-col w-full z-50 top-80 relative items-center">
                <div class="flex flex-col my-4 space-y-4">
                    <h2 class="text-3xl text-center">{{client.name}}</h2>
                        <h3 class="text-center">{{client.location}}</h3>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h2 class="text-center text-xl">{{ clientPosts.length }}</h2>
                    <h2 class="uppercase">Posts</h2>
                </div>
                <SegmentedControl />
            </div>
            <div class="flex flex-col w-1/2 z-50 top-80 relative">
                <h2 class="text-xl py-4">Recent Posts</h2>
                <PostCard />
                <PostCard />
                <PostCard />
            </div>
            <Link :href="route('post')">
                <div
                    class="fixed bottom-4 right-4 flex items-center bg-gray-200 rounded-full justify-center hover:bg-gray-300 hover:scale-110 transition cursor-pointer"
                >
                    <p class="ml-4 mr-2 text-lg text-gray-700">Write a Post</p>
                    <ComposeMessage
                        class="w-16 h-16 bg-gray-300 rounded-full transform hover:scale-100 transition-transform"
                    ></ComposeMessage>
                </div>
            </Link>
        </section>
    </AuthenticatedLayout>
</template>
