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

        return response.data.Posts;
    } catch (error) {
        console.error(error.response ? error.response.data : error.message);
    }
}

async function getClientById(id) {
    try {
        const response = await axios.get(`/clients/${id}`);

        return response.data.client;
    } catch (error) {
        console.error(error.response ? error.response.data : error.message);
    }
    return null;
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
                <template v-for="post in posts" :key="post.id">
                    <PostCard
                        class="w-1/2"
                        :postdata="post"
                        :clientdata="getClientById(post.client_id)"
                    />
                </template>
            </div>
        </section>
    </AuthenticatedLayoutAgency>
</template>
