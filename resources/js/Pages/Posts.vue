<script setup>
import PostCard from "@/Components/PostCard.vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
import { onMounted, ref } from "vue";

const posts = ref([]);

onMounted(async () => {
    posts.value = await getPosts();
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

async function getClientDataByPost(post) {
    try {
        const clientId = post.client_id;

        const response = await getClientById(clientId);
        // console.log(response.client);

        return response.client;
    } catch (error) {
        console.error("Error retrieving client:", error);
    }
}

async function getClientById(id) {
    try {
        const response = await axios.get(`/clients/${id}`);

        return response.data;
    } catch (error) {
        // Gérer l'erreur ici, par exemple, afficher l'erreur dans la console
        console.error(error.response ? error.response.data : error.message);
    }
}
</script>
<template>
    <AuthenticatedLayoutAgency class="bg-white">
        <section class="w-full flex flex-col items-center">
            <div class="w-2/5 flex flex-row justify-between mt-4">
                <h2 class="text-3xl">Posts</h2>
                <FilterIcon />
            </div>
            <div class="w-full flex flex-col mx-4 my-4 items-center">
                <PostCard
                    class="w-1/2"
                    v-for="post in posts"
                    :key="post.id"
                    :postdata="post"
                    :clientdata="getClientDataByPost(post)"
                />
            </div>
        </section>
    </AuthenticatedLayoutAgency>
</template>
