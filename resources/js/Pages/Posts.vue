<script setup>
import PostCard from "@/Components/PostCard.vue";
import FilterIcon from "@/Components/FilterIcon.vue";
import AuthenticatedLayoutAgency from "@/Layouts/AuthenticatedLayoutAgency.vue";
import { onMounted, ref, computed } from "vue";
import { Inertia } from "@inertiajs/inertia";

const posts = ref([]);
const currentPage = ref(1);
const postsPerPage = ref(7);

// Calcul de la pagination des agencies
const paginatedPosts = computed(() => {
    const start = (currentPage.value - 1) * postsPerPage.value;
    const end = start + postsPerPage.value;
    return posts.value.slice(start, end);
});

const totalPages = computed(() => {
    return Math.ceil(posts.value.length / postsPerPage.value);
});

// Fonction pour changer la page
function changePage(page) {
    currentPage.value = page;
}

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
        <section class="w-full bg-white flex flex-col items-center">
            <div class="w-2/5 flex flex-row justify-between mt-4">
                <h2 class="text-3xl">Posts</h2>
                <FilterIcon />
            </div>
            <div class="w-full flex flex-col mx-4 my-4 items-center">
                <template v-for="post in paginatedPosts" :key="post.id">
                    <PostCard
                        class="w-1/2"
                        :postdata="post"
                        :clientdata="getClientById(post.client_id)"
                        @click="
                            Inertia.visit(`/client-profile/${post.client_id}`)
                        "
                    />
                </template>
            </div>
            <div class="flex flex-row space-x-4 justify-center">
                <button
                    class="flex flex-row bottom-0 justify-center space-x-4 text-myBlue text-2xl my-4"
                    v-for="page in totalPages"
                    :key="page"
                    @click="changePage(page)"
                    :class="{
                        ' text-cyan-400': page === currentPage,
                    }"
                >
                    {{ page }}
                </button>
            </div>
        </section>
    </AuthenticatedLayoutAgency>
</template>
